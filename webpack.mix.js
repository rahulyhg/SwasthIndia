let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/backend/app.scss', 'public/css/backend.css')
    .css([
        'public/assets/css/core-styles.css',
        'public/css/styles.css',
        'public/assets/css/responsive.css'
    ], 'public/css/frontend.css')
    .js([
        'resources/assets/js/frontend/app.js',
        'resources/assets/js/frontend/plugins.js',
        'resources/assets/js/frontend/active.js'
    ], 'public/js/frontend.js')
    .js([
        'resources/assets/js/backend/before.js',
        'resources/assets/js/backend/app.js',
        'resources/assets/js/backend/after.js'
    ], 'public/js/backend.js')
    .minify('public/css/frontend.css');

if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
    mix.version();
}
