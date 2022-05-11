<?php

/**
 * The programs archive template file
 *
 * @package MulphyStarter
 */
get_header();

?>
<div class="container">
  <div class="pt-2 pb-1">
    <h1>All our programs</h1>
    <p>There is something for anyone. Have a look around.</p>
  </div>
  <ul class="py-1 ml-2">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <li class="pb-1">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <?php echo paginate_links(); ?>
</div>

<?php
get_footer();
