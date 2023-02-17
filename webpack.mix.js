const mix = require('laravel-mix');



mix.js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/protocols.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
