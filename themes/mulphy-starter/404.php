<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MulphyStarter
 */

get_header();
?>

<section class="pt-3 pb-1">
  <div class="container">
    <h1><?php esc_html_e('Nothing here', 'mulphy-starter'); ?></h1>
    <div class="py-2">
      <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try to go back!', 'mulphy-starter'); ?></p>
      <div class="py-1">
        <a href="<?php echo get_home_url(); ?>">&larr; Home</a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
