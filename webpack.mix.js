const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
   .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js')
   .browserSync({
       proxy: 'localhost:8000', // Your Laravel development server address
       files: [
           'app/**/*.php',
           'resources/views/**/*.php',
           'public/css/**/*.css',
           'public/js/**/*.js',
       ],
   });
