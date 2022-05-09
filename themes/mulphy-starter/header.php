<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MulphyStarter
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <!-- Accessibility: Skip to main content -->
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mulphy-starter'); ?></a>
    <!-- Header with main navigation -->
    <?php get_template_part('template-parts/headers/header', 'basic'); ?>
    <!-- End: Header with main navigation -->
    <!-- Main content -->
    <main id="main" role="main" tabindex="-1">