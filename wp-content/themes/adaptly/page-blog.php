<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

  <div class="resources subnav mid-cont">
    <ul>
      <li class="blog"><a href=<?php site_url(); ?>'/resources/blog' class='active'>Blog</a></li>
      <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies'>Case Studies</a></li>
      <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
      <li><?php get_search_form(  ); ?></li>
    </ul>
  </div>

<div class="blog resources">
  <div id="blog" class="blog-feed mid-cont">
    <?php query_posts( array(  'order' => "DESC", "posts_per_page" => 4, "paged" => get_query_var( 'paged' )) );
      while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <img src="<?php the_field('thumbnail'); ?>">
        <div class="excerpt">
          <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
          <?php the_excerpt('...'); ?>
          <div class="bottom-cont">
              <a href="<?php the_permalink(); ?>">Read More ></a>
              <div class="share">
                <span class="counter-total"></span>
                <?php echo do_shortcode( '[ssba]' ); ?>
              </div>
          </div>
        </div>
      </div>
      <?php endwhile;  ?>
      <div class="pagination">
        <?php previous_posts_link( '< Newer Entries' ); ?>
        <?php next_posts_link( 'Older Entries >', 0 ); wp_reset_postdata(); ?>
      </div>
  </div>
</div>

<?php
get_footer(); ?>
