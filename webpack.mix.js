const mix = require('laravel-mix');

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

mix.react('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/admin/css/style.css',
    'resources/assets/admin/css/components.css'
], 'public/css/style-admin.css');

mix.scripts([
    'resources/assets/admin/js/stisla.js',
], 'public/js/admin.js');

mix.scripts([
    'resources/assets/admin/js/scripts.js',
], 'public/js/template-admin.js');

mix.copyDirectory('resources/assets/admin/fonts/', 'public/fonts');
mix.copyDirectory('resources/assets/admin/img/', 'public/img');

if (mix.inProduction()) {
    mix.version
}
