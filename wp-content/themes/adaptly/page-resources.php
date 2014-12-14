<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

  <div class="resources subnav mid-cont">
    <ul>
      <li class="blog"><a href="#" >Blog</a></li>
      <li class="case-studies"><a href="#" >Case Studies</a></li>
      <li class='press'><a href="#" >Press</a></li>
      <li><?php get_search_form(  ); ?></li>
    </ul>
  </div>
</div>
<div class="blog resources">
  <div id="blog" class="blog-feed mid-cont">
    <?php query_posts( array(  'order' => "ASC") );
      while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <img src="<?php the_field('thumbnail'); ?>">
        <div class="excerpt">
          <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
          <?php the_excerpt('...'); ?>
          <div class="bottom-cont">
              <a href="<?php the_permalink(); ?>">Read More ></a>
          </div>
        </div>
      </div>
      <?php endwhile;wp_reset_query();  ?>
  </div>
</div>
<div class='mid-cont case-studies resources'>
  <div class="case-study-grid resources-feed" id="case-studies">
    <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'ASC', 'posts_per_page' => 6) ); ?>
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
<div class='press resources'>
  <div class="press-feed mid-cont" id="press">
    <?php query_posts( array( 'post_type' => 'press posts', 'order' => 'DESC', 'posts_per_page' => 6) ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <div class="excerpt">
          <div class="heading">
            <p><?php the_field('source'); ?></p>
            <p><?php the_field('press_date'); ?></p>
          </div>
          <a href="<?php the_field('external_link'); ?>" target=_blank><h4><?php the_title(); ?></h4></a>
          <?php the_content(); ?>
          <a href="<?php the_field('external_link'); ?>" target=_blank>Read More ></a>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
  </div>
</div>


<?php
get_footer(); ?>
