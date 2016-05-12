<?php get_header(); ?>

<div class="resources mid-cont">
  <h2>Remarkable advertising advice.</h2>

  <div class="blog-header">
    <h4>Here's what you can expect from us:</h4>
    <ul>
    	<li> - A snapshot of insights across the digital media landscape</li>
    	<li> - How-to guides and actionable advice on social advertising best practices</li>
    	<li> - Point of view on the latest trends in social advertising and beyond</li>
    </ul>
  </div>
</div>

  <div class="resources subnav mid-cont">
    <ul>
      <li class="blog"><a href=<?php site_url(); ?>'/resources/blog'>Blog</a></li>
      <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies' class='active'>Case Studies</a></li>
      <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
    </ul>
  </div>

<div class='mid-cont case-studies resources'>
  <div class="case-study-grid resources-feed" id="case-studies">
    <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'DESC', 'posts_per_page' => -1) ); ?>
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

<?php
get_footer(); ?>
