const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const ManifestPlugin = require('webpack-manifest-plugin');

module.exports = (env, options) => {
    return {
        devtool: options.mode === 'production' ? '' : 'inline-source-map',
        module: {
            rules: [
                {
                    test: /\.js(x)?$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                    }
                },
                {
                    test: /\.js(x)?$/,
                    enforce: 'pre',
                    exclude: /(node_modules|public)/,
                    use: {
                        loader: 'eslint-loader',
                        options: {
                            configFile: path.resolve('.eslintrc')
                        },
                    }
                },
                {
                    test: /\.(css|scss|sass)$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: {
                                url: true,
                                sourceMap: true,
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true,
                            }
                        },
                    ]
                },
                {
                    test: /\.(png)$/,
                    loader: 'file-loader?name=images/[name].[ext]',
                },
                {
                    test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                    loader: 'file-loader?name=fonts/[name].[ext]',
                }
            ]
        },
        resolve: {
            extensions: [".tsx", ".ts", ".jsx", ".js", ".json"]
        },
        externals: {
            window: 'window',
            document: 'document',
        },
        optimization: {
            splitChunks: {
                cacheGroups: {
                    commons: {
                        test: /[\\/]node_modules[\\/]/,
                        name: 'vendors',
                        chunks: 'all',
                    }
                }
            },
            runtimeChunk: {
                name: "manifest",
            },
        },
        plugins: [
            new ManifestPlugin(),
            new MiniCssExtractPlugin({
                filename: '[name].[contenthash:10].css'
            }),
        ],
        output: {
            filename: '[name].[contenthash:10].js'
        },
        watchOptions: {
            ignored: [/node_modules/, /vendor/]
        }
    };
};
