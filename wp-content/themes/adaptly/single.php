<?php
// template for single blog post
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header-image"><?php the_post_thumbnail('full'); ?></div>
<div class="pre-footer-cta mobile">
  <?php $cta_field = get_field('cta');
  if ($cta_field == 'Contact Us') { ?>
    <p>contact</p>
  <?php } else if ($cta_field == 'Downloadable PDF') { ?>
    <p>newsletter</p>
  <?php } else { ?>
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
  <?php } ?>
</div>

  <p  class="back-to-feed"><a href="/resources/blog">< All Articles</a></p>

<div class="mid-cont blog-post">

  <h3><?php the_title(); ?></h3>
  <span class='date'><?php the_field('date'); ?></span>
  <?php the_content(); ?>
</div>
<div class="post-share mid-cont blog-post">
  <div class="twitter"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>">Twitter</a></div>
  <div class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Facebook</a></div>
  <div class="linkedin"><a HREF="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=<?php the_excerpt(); ?>" target="_blank">LinkedIn</a></div>
  <div class="pinterest">
    <?php $post_thumbnail_id = get_post_thumbnail_id();
    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
    <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo $post_thumbnail_url ?>&description=<?php the_title() ?>, from Adaptly" data-pin-do="buttonPin" data-pin-config="above">Pinterest</a>
  </div>

</div>
<?php $author = get_field('author_name');
  if ($author) { ?>
<div class="author-wrapper">
  <div class="author mid-cont blog-post">
    <div class="author-name mobile"><h4><strong> By <?php the_field('author_name'); ?></strong></h4><h4><?php the_field('author_title'); ?></h4></div>
    <img src="<?php the_field('author_image'); ?>" class="headshot">
    <div class="author-info">
      <div class="author-name desktop"><h4><?php the_field('author_name'); ?>, <?php the_field('author_title'); ?></h4></div>
      <?php the_field('author_bio'); ?>
      <?php $has_facebook = get_field('author_facebook_link');
      $has_twitter = get_field('author_twitter_link');
      $has_linkedin = get_field('author_linkedin_link');
      if ($has_facebook) { ?>
        <a href="<?php the_field('author_facebook_link'); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/images/facebook_blue.png" alt=""></a>
      <?php };
      if ($has_twitter) { ?>
        <a href="<?php the_field('author_twitter_link'); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_blue.png" alt=""></a>
      <?php }
      if ($has_linkedin) { ?>
        <a href="<?php the_field('author_linkedin_link'); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt=""></a>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
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
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
