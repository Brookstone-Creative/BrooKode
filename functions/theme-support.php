<?php

/**
* functions/theme-support.php
*
* Description: Imported into functions.php, support all theme support related items.
*/

function brookstone_theme_support() {
  /**
  * Add default posts and comments RSS feed links to head.
  *
  * @since 1.0.0
  */
  add_theme_support( 'automatic-feed-links' );

  /**
  * Add theme support for Post Thumbnails on posts and pages.
  *
  * @since 1.0.0
  */
  add_theme_support( 'post-thumbnails' );

  /**
  * Add theme support for the Custom Logo.
  *
  * @since 1.0.0
  */
  $logo_width = 120;
  $logo_height = 90;

  // Retina Logo Support
  if( get_theme_mod( 'retina_logo', false ) ) {
    $logo_width = floor( $logo_width * 2 );
    $logo_height = floor( $logo_height * 2 );
  }

  // Add Support
  add_theme_support( 'custom-logo', array(
    'height'        => $logo_height,
    'width'         => $logo_width,
    'flex-height'   => true,
    'flex-width'    => true
  ) );

  /**
  * Allow WordPress to manage Page Titles.
  *
  * This Tells WordPress that we're not going to use a hard-coded <title> tag. Appropriate for SEO Plugins.
  *
  * @since 1.0.0
  */
  add_theme_support( 'title-tag' );

  /**
  * Switch default core markup for search form, comment form, and more.
  *
  * @since 1.0.0
  */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style'
  ) );

  /**
  * Makes theme available for translation.
  *
  * Translations can be filed in the /languages/ directory.
  *
  * @since 1.0.0
  */
  load_theme_textdomain( 'brookstone' );

  /**
  * Add support for Full and Wide align images.
  *
  * @since 1.0.0
  */
  add_theme_support( 'align-wide' );

  /**
  * Add support for selective refresh for widgets.
  *
  * @since 1.0.0
  */
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'brookstone_theme_support' );

?>