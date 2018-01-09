let mix = require('laravel-mix');
let webpack = require('webpack');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

let compilation = 'web';

if (compilation === 'web')
{

    // Web assets compilation
    mix.setResourceRoot('../');
    mix.setPublicPath(path.normalize('public/assets/www'));
    mix.autoload(
        {
            jquery: ['$', 'jquery', 'window.jQuery', 'jQuery']
        }
    );

    mix.webpackConfig(
        {
            resolve: {
                alias: {
                }
            },

            module: {
                rules: [
                    {
                        test: /\.jsx?$/,
                        parser: {
                            amd: false
                        }
                    },
                ]
            }
        }
    );

    const resourcesPath = 'resources/assets/www/';

    mix
        .copyDirectory(resourcesPath + 'images', 'public/assets/www/images/')
        .js(resourcesPath + 'js/app.js', 'js')
        .extract([
            'jquery',
            'jquery.easing',
            'axios',
            'bootstrap-sass'
        ])
        .sass(resourcesPath + 'sass/app.scss', 'css')
        .sourceMaps()
    ;
}

if (compilation === 'admin')
{
    // Admin assets compilation
}

