<?php

/**
 * Mulphy Starter Theme: Program Post Type
 */
add_action('init', 'mulphy_starter_program_post_type');

function mulphy_starter_program_post_type()
{
  $args = [
    'label'  => esc_html__('Programs', 'text-domain'),
    'labels' => [
      'menu_name'          => esc_html__('Programs', 'mulphy-starter'),
      'name_admin_bar'     => esc_html__('Program', 'mulphy-starter'),
      'add_new'            => esc_html__('Add Program', 'mulphy-starter'),
      'add_new_item'       => esc_html__('Add new Program', 'mulphy-starter'),
      'new_item'           => esc_html__('New Program', 'mulphy-starter'),
      'edit_item'          => esc_html__('Edit Program', 'mulphy-starter'),
      'view_item'          => esc_html__('View Program', 'mulphy-starter'),
      'update_item'        => esc_html__('View Program', 'mulphy-starter'),
      'all_items'          => esc_html__('All Programs', 'mulphy-starter'),
      'search_items'       => esc_html__('Search Programs', 'mulphy-starter'),
      'parent_item_colon'  => esc_html__('Parent Program', 'mulphy-starter'),
      'not_found'          => esc_html__('No Programs found', 'mulphy-starter'),
      'not_found_in_trash' => esc_html__('No Programs found in Trash', 'mulphy-starter'),
      'name'               => esc_html__('Programs', 'mulphy-starter'),
      'singular_name'      => esc_html__('Program', 'mulphy-starter'),
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
    'menu_icon'           => 'dashicons-awards',
    'supports' => [
      'title',
      'editor',
      'excerpt',
      'thumbnail',
    ],
    'rewrite' => ['slug' => 'programs',]
  ];

  register_post_type('program', $args);
}
