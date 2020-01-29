<?php

/**
* functions/navigation.php
*
* Description: Imported into functions.php, handling the registration of Navigation menus.
*/

function brookstone_menus() {
  $locations = array(
    'primary'     => __( 'Desktop Horizontal Menu', 'brookstone' ),
    'mobile'      => __( 'Mobile Menu', 'brookstone' ),
    'footer'      => __( 'Footer Menu', 'brookstone' )
  );

  register_nav_menus( $locations );
}
add_action( 'init', 'brookstone_menus' );

?>