<?php

/**
 * mulphy-starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MulphyStarter
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

/* Useful global constants */
define('MS_THEME_VERSION', '0.0.1');
define('MS_THEME_TEMPLATE_URL', get_template_directory_uri());
define('MS_THEME_PATH', get_template_directory() . '/');

/**
 * Enqueue scripts and styles
 */
function mulphy_starter_register_scripts_and_styles()
{
  // enqueue main js
  wp_enqueue_script('mulphy_starter_main_js', MS_THEME_TEMPLATE_URL . '/build/index.js', array(), '1.0.0', true);
  // enqueue main css
  wp_enqueue_style('mulphy_starter_main_css', MS_THEME_TEMPLATE_URL . '/build/index.css');
}

add_action('wp_enqueue_scripts', 'mulphy_starter_register_scripts_and_styles');

/**
 * Preload Web Fonts
 */
if (!function_exists('mulphy_starter_preload_webfonts')) {
  /**
   *
   * Preloads the main web font to improve performance.
   *
   */
  function mulphy_starter_preload_webfonts()
  {
?>
    <link rel="stylesheet preload prefetch" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/lato-v22-latin-regular.woff2')); ?>" as="style" type="text/css" crossorigin="anonymous">
    <link rel="stylesheet preload prefetch" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/montserrat-v24-latin-regular.woff2')); ?>" as="style" type="text/css" crossorigin="anonymous">
<?php
  }
}

add_action('wp_head', 'mulphy_starter_preload_webfonts');
