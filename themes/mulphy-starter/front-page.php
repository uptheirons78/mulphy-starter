<?php

/**
 * The home page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MulphyStarter
 */

get_header();

?>
<section class="home-intro py-2">
  <div class="container">
    <h2 class="uppercase font-xl">this is the front-page template.</h2>
    <p>Now it is just a blank canvas. Style it the way you want and make something beautiful.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum doloremque suscipit harum cum recusandae, deserunt eum obcaecati, aliquam magni officiis ab voluptate cumque a corrupti iste totam tempora doloribus repellat!</p>
  </div>
</section>
<section class="home-blog py-2">
  <div class="container">
    <h2 class="uppercase font-md">example of a custom query for blog posts.</h2>
    <?php
    /**
     * this is how to run a simple custom query for blog posts
     *
     * @link https://developer.wordpress.org/reference/classes/wp_query/
     */
    $homePosts = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 2
    ));
    ?>
    <?php if ($homePosts->have_posts()) : ?>
      <?php while ($homePosts->have_posts()) : ?>
        <?php $homePosts->the_post(); ?>
        <article class="py-1">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo wp_trim_words(get_the_content(), 23); ?> <a href="<?php the_permalink(); ?>">read more</a></p>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php
    /**
     * Always reset post data after running a custom query
     */
    ?>
    <?php wp_reset_postdata(); ?>
    <div class="py-1">
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See all posts.</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>