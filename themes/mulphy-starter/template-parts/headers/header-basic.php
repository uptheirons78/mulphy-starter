<?php

/**
 *
 * Nav-01 Template File
 *
 * @package MulphyStarter
 *
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

?>
<header id="masthead" class="site-header header-basic" role="banner">
  <div class="container">
    <div class="header-basic__logo-container">
      <a href="<?php echo site_url(); ?>">
        <h2>
          <?php esc_html(bloginfo('title')); ?>
        </h2>
      </a>
    </div>
    <nav class="header-basic__nav-container">
      <?php

      $args = array(
        'theme_location' => 'mulphy-main-menu',
        'container' => 'ul',
        'menu_class' => 'header-basic__list',
      );

      wp_nav_menu($args);

      ?>
    </nav>
  </div>
</header>