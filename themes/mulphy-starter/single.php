<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MulphyStarter
 */

get_header( );

?>
<div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php
get_footer();