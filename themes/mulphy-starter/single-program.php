<?php

/**
 * The template for displaying all single program
 *
 * @package MulphyStarter
 *
 */

get_header();

?>
<section class="program-main-content">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <article class="pt-2">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="py-1">
      <a href="<?php echo get_post_type_archive_link('program'); ?>">All Programs</a>
    </div>
  </div>
</section>
<section class="program-related-events py-2">
  <div class="container">
    <?php
    /**
     * this is how to run a simple custom query for program related events
     *
     * @link https://developer.wordpress.org/reference/classes/wp_query/
     */
    $today = date('Ymd');
    $homeEvents = new WP_Query(array(
      'post_type' => 'event',
      'posts_per_page' => 2,
      'meta_key' => 'event_date', //meta key to use for ordering
      'orderby' => 'meta_value_num', //ordering by a custom field (meta value)
      'order' => 'ASC', //type of ordering
      'meta_query' => array( // only show events in the future
        array(
          'key'       => 'event_date',
          'compare'   => '>=',
          'value'     => $today,
          'type'      => 'numeric'
        ),
        array(
          'key'       => 'related_programs',
          'compare'   => 'LIKE',
          'value'     => '"' . get_the_ID() . '"', // WP database serialize data so you need to use double quotes here
        ),
      ),
    ));
    ?>
    <?php if ($homeEvents->have_posts()) : ?>
      <h2 class="uppercase font-md">Custom query for related events.</h2>
      <p>Upcoming <?php echo get_the_title(); ?> Events</p>
      <?php while ($homeEvents->have_posts()) : ?>
        <?php $homeEvents->the_post(); ?>
        <?php
        if (has_excerpt()) {
          $eventExcerpt = get_the_excerpt() . ' [...]';
        } else {
          $eventExcerpt = wp_trim_words(get_the_content(), 23, ' [...]');
        }
        ?>
        <article class="py-1">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php $eventDate = new DateTime(get_field('event_date')); ?>
          <small>Event Date:
            <span><?php echo $eventDate->format('d'); ?> </span>
            <span><?php echo $eventDate->format('M'); ?> </span>
            <span><?php echo $eventDate->format('Y'); ?></span>
          </small>
          <p><?php echo $eventExcerpt; ?> <a href="<?php the_permalink(); ?>">read more</a></p>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>

<?php
get_footer();
