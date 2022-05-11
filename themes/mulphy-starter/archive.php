<?php

/**
 * The archive template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MulphyStarter
 */
get_header();

?>
<div class="container">
  <h1><?php the_archive_title(); ?></h1>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="metabox">
        <small>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j M, Y'); ?> in <?php echo get_the_category_list(', '); ?></small>
      </div>
      <?php the_content(); ?>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php echo paginate_links(); ?>
</div>

<?php
get_footer();