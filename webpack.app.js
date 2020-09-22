const path = require('path');
const merge = require('webpack-merge');

const commonWebpackConfig = require('./webpack.common');
const StyleLintWebpackPlugin = require('stylelint-webpack-plugin');

module.exports = (env, options) => {
    let config = {
        entry: {
            app: './resources/js/app.js',
            tinymce: './resources/js/tinymce.js'
        },
        output: {
            path: path.resolve('public/dist'),
        },
        plugins: [
            new StyleLintWebpackPlugin({
                configFile: path.resolve('.stylelintrc'),
                context: path.resolve('resources/sass'),
                files: '**/*.scss',
                failOnError: false,
                quiet: false,
            }),
        ]
    };

    return merge(commonWebpackConfig(env, options), config);
};
