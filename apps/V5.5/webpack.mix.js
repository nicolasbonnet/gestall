let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

//copy pictures
mix.copyDirectory('resources/assets/AdminLTE-2.4.2/dist/img', 'public/img');
mix.copyDirectory('resources/assets/AdminLTE-2.4.2/bower_components/font-awesome/fonts', 'public/fonts');
mix.copyDirectory('resources/assets/AdminLTE-2.4.2/bower_components/Ionicons/fonts', 'public/fonts');


// mix.copy("node_modules/bootstrap/dist/css/bootstrap.css", 'public/css/bootstrap.css');
// mix.copy("node_modules/bootstrap/dist/css/bootstrap-theme.css", 'public/css/bootstrap-theme.css');

mix.styles([
    "node_modules/bootstrap/dist/css/bootstrap.css",
    "node_modules/bootstrap/dist/css/bootstrap-theme.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css",
    "resources/assets/AdminLTE-2.4.2/dist/css/AdminLTE.min.css",
    "resources/assets/AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css",
    // "resources/assets/AdminLTE-2.4.2/dist/css/skins/skin-black.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/morris.js/morris.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/jvectormap/jquery-jvectormap.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/resources/assets/AdminLTE-2.4.2/dist/css/bootstrap-datepicker.min.css",
    "resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.css",
    "resources/assets/AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"
], 'public/css/all.css');

//separate jquery from other JS library
mix.copy('resources/assets/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');


<!-- jQuery 3 -->
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js", 'public/js/jquery.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js", 'public/js/jquery-ui.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js", 'public/js/bootstrap.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/raphael/raphael.min.js", 'public/js/raphael.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/morris.js/morris.min.js", 'public/js/morris.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js", 'public/js/jquery.sparkline.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js", 'public/js/jquery-jvectormap-1.2.2.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js", 'public/js/jquery-jvectormap-world-mill-en.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/jquery-knob/dist/jquery.knob.min.js", 'public/js/jquery.knob.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/moment/min/moment.min.js", 'public/js/moment.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.js", 'public/js/daterangepicker.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js", 'public/js/bootstrap-datepicker.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js", 'public/js/bootstrap3-wysihtml5.all.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js", 'public/js/jquery.slimscroll.min.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js", 'public/js/fastclick.js');
// mix.copy("resources/assets/AdminLTE-2.4.2/dist/js/adminlte.min.js", 'public/js/adminlte.min.js');
// // // <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
// mix.copy("resources/assets/AdminLTE-2.4.2/dist/js/pages/dashboard.js", 'public/js/dashboard.js');
// // // <!-- AdminLTE for demo purposes -->
// mix.copy("resources/assets/AdminLTE-2.4.2/dist/js/demo.js", 'public/js/demo.js');

mix.scripts([
    "resources/assets/AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/raphael/raphael.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/morris.js/morris.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js",
    "resources/assets/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
    "resources/assets/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/jquery-knob/dist/jquery.knob.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/moment/min/moment.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
    "resources/assets/AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js",
    "resources/assets/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js",
    "resources/assets/AdminLTE-2.4.2/dist/js/adminlte.min.js",
    // "resources/assets/AdminLTE-2.4.2/dist/js/pages/dashboard.js",
    "resources/assets/AdminLTE-2.4.2/dist/js/demo.js"
], 'public/js/all.js');