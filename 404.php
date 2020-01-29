<?php

/**
* 404.php
*
* Description: WordPress 404 File
*/

?>

<?php get_header(); ?>

  <main id="site__content" role="main">

    <section id="error404">

      <h1><?php _e( 'Page Not Found', 'brookstone' ); ?></h1>

      <div class="intro-text">
        <p>
          <?php _e( 'The page you are looking for cannot be found.', 'brookstone'); ?>
        </p>
      </div>

      <?php 
      
      get_search_form( array( 
        'label'   => _( '404 not found', 'brookstone' )
      ) );

      ?>

    </section>

  </main>

<?php get_footer(); ?>