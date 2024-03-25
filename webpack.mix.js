const mix = require('laravel-mix');


   
   mix.sass('resources/sass/app.scss', 'public/css')
   .styles([
       'resources/css/bootstrap.min.css',
       'resources/css/font-awesome.min.css',
       'resources/css/elegant-icons.css',
       'resources/css/nice-select.css',
       'resources/css/jquery-ui.min.css',
       'resources/css/owl.carousel.min.css',
       'resources/css/slicknav.min.css',
       'resources/css/styles.css',
   ], 'public/css/all.css');

   mix.js('resources/js/app.js', 'public/js')
   .scripts([
       'resources/js/jquery-3.3.1.min.js',
       'resources/js/bootstrap.min.js',
       'resources/js/jquery.nice-select.min.js',
       'resources/js/jquery-ui.min.js',
       'resources/js/jquery.slicknav.js',
       'resources/js/mixitup.min.js',
       'resources/js/owl.carousel.min.js',
       'resources/js/main.js',
   ], 'public/js/all.js');