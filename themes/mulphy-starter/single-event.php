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
      <article class="pt-2">
        <h2><?php the_title(); ?></h2>
        <?php $eventDate = new DateTime(get_field('event_date')); ?>
        <small>Event Date:
          <span><?php echo $eventDate->format('d'); ?> </span>
          <span><?php echo $eventDate->format('M'); ?> </span>
          <span><?php echo $eventDate->format('Y'); ?></span>
        </small>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  <div class="pt-2">
    <?php
      /**
       * Array that contain all related programs
       */
      $related_programs = get_field('related_programs');
    ?>
    <?php if ($related_programs) : ?>
      <h2>Related programs</h2>
      <ul class="ml-2">
        <?php foreach ($related_programs as $program) : ?>
          <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="pt-3">
    <a href="<?php echo get_post_type_archive_link('event'); ?>">All Events &rarr;</a>
  </div>
</div>

<?php
get_footer();
