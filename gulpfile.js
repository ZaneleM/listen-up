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

 var bower_components = 'bower_components/', assets = 'resources/assets/';

elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy(bower_components + 'jquery/dist/jquery.min.js', assets + 'js/jquery.min.js');
    mix.copy(bower_components + 'bootstrap/dist/js/bootstrap.min.js', assets + 'js/bootstrap.min.js');
    mix.copy(bower_components + 'vue/dist/vue.min.js', assets + 'js/vue.min.js');
    mix.copy(bower_components + 'vue/dist/vue.js', assets + 'js/vue.js');
    mix.copy(bower_components + 'vue-resource/dist/vue-resource.min.js', assets + 'js/vue-resource.min.js');


    mix.scripts([
      'jquery.min.js',
      'bootstrap.min.js',
      'vue.js',
      'vue-resource.min.js',
      'components.js'
    ]);
});
