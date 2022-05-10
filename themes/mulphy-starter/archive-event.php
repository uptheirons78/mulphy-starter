<?php

/**
 * The event archive template file
 *
 * @package MulphyStarter
 */
get_header();

?>
<div class="container">
  <div class="py-2">
    <h1>All our events</h1>
    <p>See what is going on in our world.</p>
  </div>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <article class="py-1">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>