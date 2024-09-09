const mix = require('laravel-mix');

mix.js(['resources/js/app.js',
        'resources/js/bootstrap.js',
        'resources/js/bootstrap.min.js',
        'resources/js/form-contact.js',
        'resources/js/isotope.3.0.6.js',
        'resources/js/jquery.appear.js',
        'resources/js/jquery.inview.min.js',
        'resources/js/jquery.meanmenu.js',
        'resources/js/jquery.sticky.js',
        'resources/js/jquery.2.2.4.js',
        'resources/js/main.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/popper.min.js',
        'resources/js/scripts.js',
        'resources/js/scrolltopcontrol.js',
        'resources/js/venobox.min.js',
        'resources/js/wow.min.js',
    ], 'public/js/all.js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
       'resources/css/animate.css',
       'resources/css/app.css',
       'resources/css/bootstrap.min.css',
       'resources/css/icofont.min.css',
       'resources/css/meanmenu.min.css',
       'resources/css/owl.carousel.min.css',
       'resources/css/owl.theme.default.min.css',
       'resources/css/responsive.css',
       'resources/css/style.css',
       'resources/css/style2.css',
       'resources/css/venobox.min.css',
   ], 'public/css/all.css');
