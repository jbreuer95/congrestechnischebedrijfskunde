var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'bootstrap.css',
        'font-awesome.css',
        'gfonts.css',
        'animate.css',
        'elements.css',
        'custom.css'
    ],'public/css/all.css');

    mix.scripts([
        'jquery-2.1.4.min.js',
        'bootstrap.js',
        'scrolltopcontrol.js',
        'custom.js'
    ],'public/js/all.js');

    mix.copy('resources/assets/libs/fonts', 'public/fonts');
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/libs/licenses', 'public/licenses');
});
