<?php
/**
 * Mulphy Starter Theme: Event Post Type
 */
add_action('init', 'mulphy_starter_event_post_type');

function mulphy_starter_event_post_type()
{
  $args = [
    'label'  => esc_html__('Events', 'text-domain'),
    'labels' => [
      'menu_name'          => esc_html__('Events', 'mulphy_starter'),
      'name_admin_bar'     => esc_html__('Event', 'mulphy_starter'),
      'add_new'            => esc_html__('Add event', 'mulphy_starter'),
      'add_new_item'       => esc_html__('Add new event', 'mulphy_starter'),
      'new_item'           => esc_html__('New event', 'mulphy_starter'),
      'edit_item'          => esc_html__('Edit event', 'mulphy_starter'),
      'view_item'          => esc_html__('View event', 'mulphy_starter'),
      'update_item'        => esc_html__('View event', 'mulphy_starter'),
      'all_items'          => esc_html__('All Events', 'mulphy_starter'),
      'search_items'       => esc_html__('Search Events', 'mulphy_starter'),
      'parent_item_colon'  => esc_html__('Parent event', 'mulphy_starter'),
      'not_found'          => esc_html__('No Events found', 'mulphy_starter'),
      'not_found_in_trash' => esc_html__('No Events found in Trash', 'mulphy_starter'),
      'name'               => esc_html__('Events', 'mulphy_starter'),
      'singular_name'      => esc_html__('Event', 'mulphy_starter'),
    ],
    'public'              => true,
    'show_in_rest'        => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'has_archive'         => true,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite_no_front'    => false,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-calendar-alt',
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
    ],
    'taxonomies' => [
      'category',
    ],
    'rewrite' => [ 'slug' => 'events' ],
  ];

  register_post_type('event', $args);
}
