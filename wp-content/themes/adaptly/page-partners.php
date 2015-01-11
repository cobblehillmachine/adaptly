<?php get_header(); ?>

    <div class="mid-cont">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; wp_reset_query(); ?>



 <?php query_posts( array( 'post_type' => 'partners', 'posts_per_page' => 20, 'order' => "ASC") ); ?>
 <?php while ( have_posts() ) : the_post();
      $has_content = get_the_content();
      if ($has_content) { ?>
        <div class="partner featured <?php the_title(); ?>">
          <div class="logo"><?php the_post_thumbnail('full'); ?></div>
          <div class="title"><?php the_content(); ?></div>
        </div>
      <?php } ?>
 <?php endwhile; wp_reset_query(); ?>
<h3>Data and Measurement Partners</h3>
 <?php query_posts( array( 'post_type' => 'partners', 'posts_per_page' => 20, 'order' => 'ASC') ); ?>
 <?php while ( have_posts() ) : the_post();
      $has_content = get_the_content();
      if (!$has_content) { ?>
        <a href="<?php the_field('external_link') ?>">
          <div class="partner data">
            <?php the_post_thumbnail('full'); ?>
          </div>
        </a>
      <?php } ?>
 <?php endwhile; wp_reset_query(); ?>

  </div>

<div class="pre-footer-cta">
  <p class="partner-signup">Start receiving Adaptly Partner updates</p>
  <form action="//adaptly.us3.list-manage.com/subscribe/post?u=1304346d0242a3209ad4480f9&amp;id=3c53c3da2a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-signup" target="_blank" novalidate>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1304346d0242a3209ad4480f9_3c53c3da2a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button" ><img src="<?php echo get_template_directory_uri(); ?>/images/cta arrow.svg" class="cta-arrow"></div></div>
  </form>
</div>

<!--End mc_embed_signup-->
</div>

<?php get_footer(); ?>
