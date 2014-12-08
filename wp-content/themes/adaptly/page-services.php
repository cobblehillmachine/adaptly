<?php get_header(); ?>
<div class="mid-cont services">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
  <?php endwhile; wp_reset_query(); ?>

  <?php query_posts( array( 'post_type' => 'services') ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="single-service">
      <?php the_post_thumbnail('full'); ?>
      <?php the_title(); ?>
      <?php the_content(); ?>
    </div>
  <?php endwhile; wp_reset_query(); ?>

  <?php the_field('team_intro'); ?>


</div>

<div class="services team-pic">
  <?php the_post_thumbnail('full'); ?>
</div>

<div class="mid-cont">
  <?php the_field('case_study_intro'); ?>
  <div class="case-study-grid">
    <?php query_posts( array( 'post_type' => 'case studies') ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="case-study">
      <div class="photo"><?php the_post_thumbnail('full'); ?></div>
      <div class="color-overlay"></div>
      <div class="text-overlay">
        <?php the_title(); ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Learn More </a>
      </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>
