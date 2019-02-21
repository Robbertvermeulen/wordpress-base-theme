<!DOCTYPE html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
      <title><?php echo trim( wp_title( '', false ) ); ?></title>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
