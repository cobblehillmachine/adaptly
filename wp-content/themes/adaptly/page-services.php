<?php get_header(); ?>
<div class="mid-cont services">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
  <?php endwhile; wp_reset_query(); ?>

  <?php query_posts( array( 'post_type' => 'services', 'order' => 'ASC') ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="single-service">
      <?php the_post_thumbnail('full'); ?>
      <h4><?php the_title(); ?></h4>
      <?php the_content(); ?>
    </div>
  <?php endwhile; wp_reset_query(); ?>

  <?php the_field('team_intro'); ?>

</div>

<div class="services team-pic">
  <?php the_post_thumbnail('full'); ?>
</div>

<div class="mid-cont case-study-wrapper">
  <?php the_field('case_study_intro'); ?>
  <div class="case-study-grid">
    <?php query_posts( array( 'post_type' => 'case studies', 'posts_per_page' => 8, 'order' => "ASC") ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="case-study">
      <a href="<?php the_permalink(); ?>">
        <div class="photo"><?php the_post_thumbnail('full'); ?></div>
        <div class="color-overlay"></div>
        <div class="text-overlay">
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="learn-more">Learn More
        </div>
      </a>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>
<div class="pre-footer-cta">
    <p class="request-demo-cta contact-us">Start using Adaptly services today.<a href="/contact">Contact Us</a></p>

  </div>

<?php get_footer(); ?>
