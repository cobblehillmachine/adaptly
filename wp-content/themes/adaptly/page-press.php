<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

  <div class="resources subnav mid-cont">
    <ul>
      <li class="blog"><a href=<?php site_url(); ?>'/resources/blog'>Blog</a></li>
      <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies'>Case Studies</a></li>
      <li class='press'><a href=<?php site_url(); ?>'/resources/press' class='active'>Press</a></li>
    </ul>
  </div>

<div class='press resources'>
  <div class="press-feed mid-cont" id="press">
    <?php query_posts( array( 'post_type' => 'press posts', 'order' => 'DESC', 'posts_per_page' => 4, "paged" => get_query_var( 'paged' ))); ?>
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
      <?php endwhile; ?>
      <div class="pagination">
        <?php previous_posts_link( '< Newer Entries' ); ?>
        <?php next_posts_link( 'Older Entries >', 0 ); wp_reset_postdata(); ?>
      </div>
  </div>
</div>


<?php
get_footer(); ?>
