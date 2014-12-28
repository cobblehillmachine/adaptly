<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

  <div class="resources subnav mid-cont">
    <ul>
      <li class="blog"><a href=<?php site_url(); ?>'/resources/blog'>Blog</a></li>
      <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies' class='active'>Case Studies</a></li>
      <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
    </ul>
  </div>

<div class='mid-cont case-studies resources'>
  <div class="case-study-grid resources-feed" id="case-studies">
    <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'ASC', 'posts_per_page' => 6) ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="case-study">
      <a href="<?php the_permalink(); ?>">
        <div class="photo"><?php the_post_thumbnail('full'); ?></div>
        <div class="color-overlay"></div>
        <div class="text-overlay">
          <?php the_title(); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="learn-more">Learn More
        </div>
      </a>
    </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<?php
get_footer(); ?>
