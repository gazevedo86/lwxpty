var elixir = require('laravel-elixir');

elixir(mix => {
    //mix.sass('app.scss');
    //mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
    //mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
    mix.styles([
        'resources/assets/inspinia/css/bootstrap.min.css',
        'resources/assets/inspinia/font-awesome/css/font-awesome.css',
        'resources/assets/inspinia/css/style.css',
        'resources/assets/inspinia/css/animate.css',
        ], 'public/css/app.css', './');
    mix.scripts([
        'resources/assets/inspinia/js/jquery-3.1.1.min.js',
        'resources/assets/inspinia/js/jquery-3.1.1.min.js',
        'resources/assets/inspinia/js/bootstrap.min.js',
        'resources/assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js',
        'resources/assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.spline.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.resize.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.pie.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.symbol.js',
        'resources/assets/inspinia/js/plugins/flot/jquery.flot.time.js',
        'resources/assets/inspinia/js/plugins/peity/jquery.peity.min.js',
        'resources/assets/inspinia/js/demo/peity-demo.js',
        'resources/assets/inspinia/js/inspinia.js',
        'resources/assets/inspinia/js/plugins/pace/pace.min.js',
        'resources/assets/inspinia/js/plugins/jquery-ui/jquery-ui.min.js',
        'resources/assets/inspinia/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
        'resources/assets/inspinia/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'resources/assets/inspinia/js/plugins/easypiechart/jquery.easypiechart.js',
        'resources/assets/inspinia/js/plugins/sparkline/jquery.sparkline.min.js',
        'resources/assets/inspinia/js/demo/sparkline-demo.js',
        'resources/assets/js/app.js'
        ], 'public/js/app.js', './');

});
