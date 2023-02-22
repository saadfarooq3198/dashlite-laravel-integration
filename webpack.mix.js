const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').css('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles('resources/css/backend/*.css', 'public/css/backend/theme.css');
mix.styles('resources/css/frontend/*.css', 'public/css/frontend/theme.css');

mix.scripts('resources/js/backend/*.js', 'public/js/backend/theme.js');
mix.scripts('resources/js/frontend/*.js', 'public/js/frontend/theme.js');

mix.copyDirectory('resources/css/backend/fonts', 'public/css/fonts');