<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MulphyStarter
*/
get_header( );

?>
<div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer( ); ?>