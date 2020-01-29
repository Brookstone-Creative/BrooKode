<?php

/**
* page.php
*
* Description: Standard Default Page
*/

?>

<?php get_header(); ?>

  <main id="site__content" role="main">

    <section id="page">

      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h1><?php _e( the_title() ); ?></h1>

        <div class="page__content">

          <?php the_content(); ?>
          
        </div>

      <?php endwhile; endif; ?>

    </section>

  </main>

<?php get_footer(); ?>