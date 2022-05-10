<?php

/**
 * Template Name: Past Events
 * Template Post Type: Page
 *
 * @package MulphyStarter
 */

get_header();

?>
<div class="container">
  <div class="py-2">
    <h1>All our past events</h1>
    <p>See what we organized.</p>
  </div>
  <?php
    $today = date('Ymd');
    $pastEvents = new WP_Query(array(
      'paged' => get_query_var('paged', 1), //YOU NEED THIS FOR PAGINATION!
      'post_type' => 'event',
      'posts_per_page' => -1,
      'meta_key' => 'event_date', //meta key to use for ordering
      'orderby' => 'meta_value_num', //ordering by a custom field (meta value)
      'order' => 'DESC', //type of ordering
      'meta_query' => array( // only show events in the future
        array(
          'key'       => 'event_date',
          'compare'   => '<',
          'value'     => $today,
          'type'      => 'numeric'
        ),
      ),
    ));
  ?>
  <?php if ($pastEvents->have_posts()) : ?>
    <?php while ($pastEvents->have_posts()) : ?>
      <?php $pastEvents->the_post(); ?>
      <article class="py-1">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
  <?php
    echo paginate_links( array(
      'total' => $pastEvents->max_num_pages
    ) );
  ?>
</div>

<?php get_footer(); ?>