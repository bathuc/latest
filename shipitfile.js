'use strict';

const commander = require('commander');
const chalk = require('chalk');

module.exports = function (shipit) {
    shipit.initConfig({
        test: {
            servers: 'ubuntu@server.com',
            key: '~/.ssh/thucle.pem',
            deployTo: '/var/www/latest.test',
            defaultBranch: 'master',
        },
        production: {
            servers: 'ubuntu@server.com',
            key: '~/.ssh/thucle.pem',
            deployTo: '/var/www/latest.test',
            defaultBranch: 'master',
        },
    });

    commander.option('-b, --branch [branch]', 'Branch to deploy')
        .parse(process.argv);

    function gitFetchOrigin() {
        shipit.log(chalk.yellow('Fetching origin...'));

        return shipit.remote('sudo git fetch origin -p', {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Fetch origin done!'));

                _printSeparator();
            })
    }

    function verifyExistingOfTargetBranch() {
        shipit.log(chalk.yellow('Checking target branch \"' + _getTargetBranch() + '\" ...'));

        return shipit.remote('sudo git rev-parse --verify origin/' + _getTargetBranch(), {cwd: shipit.config.deployTo, tty: true})
            .then(function (child) {
                if (child[0].stdout.indexOf('Needed a single revision') > -1) {
                    let message = "Branch: origin/" + _getTargetBranch() + ' does not exist';

                    shipit.log(chalk.red(message));

                    throw message;
                }

                shipit.log(chalk.green('Check target branch \"' + _getTargetBranch() + '\" done!'))
            });
    }

    function gitReset() {
        shipit.log(chalk.yellow('Resetting the working tree...'));

        return shipit.remote('sudo git add -A && sudo git reset --hard', {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Reset working tree done!'));

                _printSeparator();
            });
    }

    function gitPull() {
        shipit.log(chalk.yellow('Pulling \"' + _getTargetBranch() + '\" branch...'));

        return shipit.remote('sudo git pull origin ' + _getTargetBranch(), {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Pull \"' + _getTargetBranch() + '\" branch done!'));

                _printSeparator();
            })
    }

    function gitCheckout() {
        shipit.log(chalk.yellow('Checking out to \"' + _getTargetBranch() + '\" branch...'));

        return shipit.remote('sudo git checkout ' + _getTargetBranch(), {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Checkout to \"' + _getTargetBranch() + '\" branch done!'));

                _printSeparator();
            });
    }

    /**
     * Make a `temporary folder` for composer to pre-download packages, save theme to the composer's cache.
     * @returns {*}
     */
    function prepareComposerPackages() {
        shipit.log(chalk.yellow('Checking composer.json, composer.lock to newest version and run composer install...'));

        return shipit.remote('' +
            'sudo git checkout origin/' + _getTargetBranch() + ' -- composer.json composer.lock'
            + ' && sudo mkdir -p /usr/share/httpd/.composer/cache'
            + ' && sudo chown apache:apache /usr/share/httpd/.composer/cache -R'
            + ' && sudo chown apache:apache vendor -R'
            + ' && sudo -u apache mkdir -p storage/composer/'
            + ' && sudo -u apache cp composer.json storage/composer/'
            + ' && sudo -u apache cp composer.lock storage/composer/'
            + ' && sudo -u apache /usr/local/bin/composer install --no-autoloader --no-suggest -d ' + shipit.config.deployTo + '/storage/composer/'
            , {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Preparing composer packages done!'));

                _printSeparator();
            });
    }

    function composerInstall() {
        shipit.log(chalk.yellow('Running composer install'));

        return shipit.remote('sudo -u apache /usr/local/bin/composer install --optimize-autoloader --no-suggest -d ' + shipit.config.deployTo, {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Running composer install is done!'));

                _printSeparator();
            });
    }

    function updateDotEnvFile() {
        shipit.log(chalk.yellow('Updating .env file...'));

        let dot_env_file = _isProduction() ? '.env.production' : '.env.test';

        return shipit.remote('sudo cp ' + dot_env_file + ' .env', {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Update .env done!'));

                _printSeparator();
            });
    }

    function cachingRoutesAndConfig() {
        shipit.log(chalk.yellow('Caching Routes and Config ...'));

        return shipit.remote('sudo -u apache php artisan config:cache && sudo -u apache php artisan route:cache && sudo -u apache php artisan cache:clear', {cwd: shipit.config.deployTo, tty: true})
            .then(function () {
                shipit.log(chalk.green('Caching Routes and Config done!'));

                _printSeparator();
            });
    }

    function reloadApache2() {
        if (!_isProduction()) {
            return shipit.local('echo "Bypass reload Apache2 assets on development."');
        }

        shipit.log(chalk.yellow('Reloading Apache2...'));

        return shipit.remote('sudo systemctl reload httpd', {tty: true})
            .then(function () {
                shipit.log(chalk.green('Reloading Apache2 has been done!'));

                _printSeparator();
            });
    }

    function _getTargetBranch() {
        return commander.branch || shipit.config.defaultBranch;
    }

    function _isProduction() {
        return shipit.options.environment === 'production';
    }

    function _printSeparator() {
        shipit.log('========================================================================');
    }

    function syncAssetsToRemote() {
        return shipit.local('git checkout ' + _getTargetBranch() + ' && npm run build')
            .then(() => shipit.remote('sudo rm -rf /tmp/test-intl.com-dist/', {tty: true}))
            .then(() => shipit.copyToRemote('public/dist/*', '/tmp/test-intl.com-dist/'))
            .then(() => shipit.remote('sudo -u apache rsync /tmp/test-intl.com-dist/ ' + shipit.config.deployTo + '/public/dist/ --delete -r', {tty: true}))
    }

    shipit.task('deploy-all', function () {
        return gitFetchOrigin()
            .then(verifyExistingOfTargetBranch)
            .then(gitReset)
            .then(prepareComposerPackages)
            .then(gitReset)
            .then(syncAssetsToRemote)
            .then(gitCheckout)
            .then(gitPull)
            .then(composerInstall)
            .then(updateDotEnvFile)
            .then(cachingRoutesAndConfig)
            .then(reloadApache2);
    });

    shipit.task('deploy-php', function () {
        return gitFetchOrigin()
            .then(verifyExistingOfTargetBranch)
            .then(gitReset)
            .then(prepareComposerPackages)
            .then(gitReset)
            .then(gitCheckout)
            .then(gitPull)
            .then(composerInstall)
            .then(updateDotEnvFile)
            .then(cachingRoutesAndConfig)
            .then(reloadApache2);
    });
};
