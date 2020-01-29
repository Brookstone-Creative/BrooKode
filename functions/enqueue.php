<?php

/**
* functions/enqueue.php
*
* Description: Imported into functions.php, supporting all style/script enqueue actions.
*/

function brookstone_register_styles() {
  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style( 'normalize', get_template_directory() . '/assets/css/normalize.css', array(), $theme_version );
  wp_enqueue_style( 'skeleton', get_template_directory() . '/assets/css/skeleton.css', array(), $theme_version );
  wp_enqueue_style( 'brookstone-stylesheet', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'brookstone_register_styles' );

function brookstone_register_scripts() {
  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_script( 'brookstone-js', get_template_directory() . '/assets/js/brookstone.js', array(), $theme_version, false );
}
add_action( 'wp_enqueue_scripts', 'brookstone_register_scripts' );

?>