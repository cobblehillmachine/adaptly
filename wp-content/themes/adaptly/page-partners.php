<?php get_header(); ?>

    <div class="mid-cont">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; wp_reset_query(); ?>



 <?php query_posts( array( 'post_type' => 'partners', 'posts_per_page' => 20, 'order' => "ASC") ); ?>
 <?php while ( have_posts() ) : the_post();
      $has_content = get_the_content();
      if ($has_content) { ?>
        <div class="partner featured <?php the_title(); ?>">
          <div class="logo"><?php the_post_thumbnail('full'); ?></div>
          <div class="title"><?php the_content(); ?></div>
        </div>
      <?php } ?>
 <?php endwhile; wp_reset_query(); ?>
<h3>Data and Measurement Partners</h3>
 <?php query_posts( array( 'post_type' => 'partners', 'posts_per_page' => 20, 'order' => 'ASC') ); ?>
 <?php while ( have_posts() ) : the_post();
      $has_content = get_the_content();
      if (!$has_content) { ?>
        <a href="<?php the_field('external_link') ?>">
          <div class="partner data">
            <?php the_post_thumbnail('full'); ?>
          </div>
        </a>
      <?php } ?>
 <?php endwhile; wp_reset_query(); ?>

  </div>

<?php get_footer(); ?>
