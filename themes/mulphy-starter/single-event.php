<?php

/**
 * The template for displaying all single event
 *
 * @package MulphyStarter
 *
 */

get_header();

?>
<div class="container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <div class="pt-3">
    <a href="<?php echo get_post_type_archive_link('event'); ?>">All Events</a>
  </div>
</div>

<?php get_footer(); ?>