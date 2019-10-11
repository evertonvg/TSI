const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/assets/images','public/assets/images')
    .copy('resources/js/jQuery.js','public/js');

mix.browserSync('http://tsi2.test');
