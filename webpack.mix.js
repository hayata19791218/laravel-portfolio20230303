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

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/reset.scss', 'public/css/reset.css')
 .sass('resources/sass/admin.scss', 'public/css/admin.css')
 .sass('resources/sass/workCreate.scss', 'public/css/workCreate.css')
 .sass('resources/sass/workEdit.scss', 'public/css/workEdit.css')
 .sass('resources/sass/index.scss', 'public/css/index.css')
 .sass('resources/sass/workShow.scss', 'public/css/workShow.css')
 .options({
     processCssUrls: false
 })
 .postCss('resources/css/app.css', 'public/css', [
 require('postcss-import'),
 require('tailwindcss'),
 require('autoprefixer'),
 ]
);
