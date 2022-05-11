<?php
/**
 * Mulphy Starter Theme: Adjust Queries
 */
function mulphy_starter_adjust_queries($query) {
  /**
   *
   * Adjust event query to exclude past events
   *
   * */
  if ( !is_admin() && is_post_type_archive( 'event' ) && $query->is_main_query() ) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key'       => 'event_date',
        'compare'   => '>=',
        'value'     => $today,
        'type'      => 'numeric'
      ),
    ));
  }
  /**
   *
   * Adjust programs query to order them alphabetically in archive
   *
   * */
  if ( !is_admin() && is_post_type_archive( 'program' ) && $query->is_main_query() ) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

}

add_action('pre_get_posts', 'mulphy_starter_adjust_queries');
