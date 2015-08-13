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

<div class="resources subnav mid-cont blog">
  <ul data-create-select="true">
    <li class="blog"><a href=<?php site_url(); ?>'/resources/blog' class='active'>Blog</a></li>
    <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies'>Case Studies</a></li>
    <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
    <li><?php get_search_form(); ?></li>
  </ul>
</div>

<div class="blog resources">
  <div id="blog" class="blog-feed mid-cont resources">
    <?php query_posts( array(  'order' => "DESC", "posts_per_page" => 4, "paged" => get_query_var( 'paged' )) );
      while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_field('thumbnail'); ?>">
        </a>
        <div class="excerpt">
          <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
          <?php the_excerpt('...'); ?>
          <div class="bottom-cont">
              <a href="<?php the_permalink(); ?>">Read More ></a>
              <div class="share">
                <span class="counter-total">
                <?php 
                $link = get_permalink();
                echo get_tweets($link) + get_likes($link); ?> shares
                </span>
                <div class="twitter"><a target=_blank href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title() ?>"><img src="../images/twitter_blue.png" alt="twitter"></a></div>
                <div class="facebook"><a target=_blank href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><img src="../images/facebook_blue.png" alt="facebook"></a></div>
                <div class="pinterest">
                  <?php $post_thumbnail_id = get_post_thumbnail_id();
                  $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
                  <a target=_blank href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo $post_thumbnail_url ?>&description=<?php the_title() ?>, from Adaptly" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <div class="pagination">
        <?php previous_posts_link( 'Newer >' ); ?>
        <?php next_posts_link( '> Older', 0 ); wp_reset_postdata(); ?>
      </div>
  </div>
</div>

<div class="pre-footer-cta mobile">
  <p class="newsletter-signup">Start receiving Adaptly emails monthly</p>
  <form action="//adaptly.us3.list-manage.com/subscribe/post?u=1304346d0242a3209ad4480f9&amp;id=db19f9e852" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-signup" target="_blank" novalidate>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1304346d0242a3209ad4480f9_db19f9e852" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button" ></div></div>
  </form>
</div>

 <script type="text/javascript">
 (function(d){
     var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
     p.type = 'text/javascript';
     p.async = true;
     p.src = '//assets.pinterest.com/js/pinit.js';
     f.parentNode.insertBefore(p, f);
 }(document));
 </script>

<?php get_footer(); ?>
