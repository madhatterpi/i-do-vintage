<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */



 function add_google_fonts() {

 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lora|Nunito|Parisienne|La+Belle+Aurore', false );

 }

 add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/nav-walker.php', // Bootstrap navwalker
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//remove wordpress topbar
add_filter('show_admin_bar', '__return_false');
