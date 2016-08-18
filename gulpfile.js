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
        mix.sass('app.scss', 'public/css/app.css', null, true);
});




elixir(function(mix) {

    /*
    mix.styles([
        'admin/dashboard.css',
        'admin/auth.css'
    ], 'public/css/admin.css');
    */
    
    mix.sass(['admin.scss'], 'public/css/admin.css', null, true);


    // admin scripts
    mix.scripts([
        
        'admin/config.js',

        /*
         * angular controllers
         */
        'admin/controllers/LoginController.js',
        'admin/controllers/RegistrationController.js',

        /* 
         * library
         */
        'admin/library/helpers.js',
        'admin/library/auth.js',

        /*
         * single views
         */
        '/admin/views/auth/login.js',


    ], 'public/js/admin.js', 'resources/assets/js');
});