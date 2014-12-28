<?php
// template for single blog post
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header-image"><?php the_post_thumbnail('full'); ?></div>
<div class="pre-footer-cta">
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
<div class="mid-cont blog-post">
  <p><a href="/resources/blog"><< See all blog posts</a></p>
  <h3><?php the_title(); ?></h3>
  <span class='date'><?php the_field('date'); ?></date>
  <?php the_content(); ?>
</div>
<div class="post-share mid-cont">
  <div class="twitter"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>">Twitter</a></div>
  <div class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Facebook</a></div>
  <div class="email"><a HREF="mailto:?body=Hi,check out this post by Adaptly: <?php the_permalink(); ?>">Send</a></div>

</div>
<?php $author = get_field('author');
  if ($author) { ?>
<div class="author-wrapper">
  <div class="author mid-cont">
    <img src="<?php the_field('author_image'); ?>" class="headshot">
    <div class="author-info">
      <?php the_field('author'); ?>
      <?php $has_facebook = get_field('author_facebook_link');
      $has_twitter = get_field('author_twitter_link');
      if ($has_facebook) { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_blue.png" alt="">
      <?php };
      if ($has_twitter) { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_blue.png" alt="">
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<div class="pre-footer-cta">
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
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
