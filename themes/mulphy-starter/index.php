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
      <div class="metabox">
        <small>Posted by <?php the_author_posts_link( ); ?> on <?php the_time('j M, Y'); ?> in <?php echo get_the_category_list(', '); ?></small>
      </div>
      <?php the_content(); ?>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php echo paginate_links(); ?>
</div>

<?php get_footer( ); ?>