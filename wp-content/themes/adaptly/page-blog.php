<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

  <div class="resources subnav mid-cont blog">
    <ul>
      <li class="blog"><a href=<?php site_url(); ?>'/resources/blog' class='active'>Blog</a></li>
      <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies'>Case Studies</a></li>
      <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
      <li><?php get_search_form(  ); ?></li>
    </ul>
  </div>

<div class="blog resources">
  <div id="blog" class="blog-feed mid-cont resources">
    <?php query_posts( array(  'order' => "DESC", "posts_per_page" => 4, "paged" => get_query_var( 'paged' )) );
      while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumbnail'); ?>"></a>
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
        <?php previous_posts_link( 'Newer >' ); ?>
        <?php next_posts_link( '> Older', 0 ); wp_reset_postdata(); ?>
      </div>
  </div>
</div>

<div class="pre-footer-cta mobile">
  <p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
  <form action="//adaptly.us3.list-manage.com/subscribe/post?u=1304346d0242a3209ad4480f9&amp;id=db19f9e852" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-signup" target="_blank" novalidate>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1304346d0242a3209ad4480f9_db19f9e852" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button" ></div>
  </form>
</div>

<?php
get_footer(); ?>
