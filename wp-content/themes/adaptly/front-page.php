<?php get_header(); ?>

<div class="mid-cont home-page">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <div class="icon-container">
      <?php the_field('technology_intro'); ?>
    </div>
    <?php the_field('work_smarter'); ?>
  <?php endwhile; wp_reset_query(); ?>
</div>

<div class="home-page client-testimonial-wrapper">
  <div class="client-testimonial-carousel flexslider">
    <ul class="slides">
    <?php query_posts( array( 'post_type' => 'client testimonials') ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <div class="mid-cont">
          <?php the_content(); ?>
          <p class="client-name bold-type"><?php the_title(); ?></p>
        </div>
      </li>

    <?php endwhile; wp_reset_query(); ?>
    </ul>
  </div>
</div>

<div class="home-page client-wrapper">
  <div class="wide-cont clients">
    <ul class="">
    <?php query_posts( array( 'post_type' => 'clients', 'posts_per_page' => 6) ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <div class="logo-wrapper">
          <?php the_post_thumbnail(full); ?>
        </div>
      </li>
    <?php endwhile; wp_reset_query(); ?>
    </ul>
  </div>
</div>

<div class="mid-cont home-page">
  <?php the_field('case_study_intro'); ?>
  <div class="case-study-grid">
    <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'DESC', 'posts_per_page' => 6) ); ?>
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
