<?php
/**
 * Enqueue theme scripts and styles
 */
function _enqueue_scripts() {

   $version = '1.0.0';

   // Stylesheets
   wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css' );
   wp_enqueue_style( 'grid_css', get_template_directory_uri() . '/css/grid.css' );
   wp_enqueue_style( 'main_css', get_stylesheet_uri(), false, $version );
   wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css', false, $version );

   // Scripts
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), $version );

}
add_action( 'wp_enqueue_scripts', '_enqueue_scripts' );
?>
