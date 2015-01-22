<?php get_header(); ?>
<div class='header-slider careers'>
  <div class="flexslider">
    <?php the_field('header_image_gallery'); ?>
  </div>
</div>
<div class='wide-cont careers'>
  <?php while ( have_posts() ) : the_post(); ?>
    <div><?php the_content(); ?></div>
  <?php endwhile; wp_reset_query(); ?>
</div>
<div class="mid-cont benefits careers">
  <?php the_field("benefits"); ?>
  <?php query_posts( array( 'post_type' => 'benefits', 'order' => "ASC", 'posts_per_page' => 10) ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="benefit">
    <?php the_post_thumbnail('full'); ?>
    <?php the_title(); ?>
  </div>
  <?php endwhile; wp_reset_query(); ?>
</div>
<div class="employee-quotes flexslider">
  <ul class="slides">
  <?php query_posts( array( 'post_type' => 'employee quotes', 'order' => "ASC", 'posts_per_page' => 10) ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <li>
        <?php the_post_thumbnail('full'); ?>
        <div class="quote">
          <?php the_content(); ?>
          <span class="title"><?php the_title(); ?></span>
        </div>
      </li>
    <?php endwhile; wp_reset_query(); ?>
  </ul>
</div>
<div class="pre-footer-cta careers">
  <p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
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
<?php get_footer(); ?>

