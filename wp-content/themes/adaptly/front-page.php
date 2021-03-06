<?php get_header(); ?>
<div class="video-bg desktop home-page">
  <video id="example_video_1" class="video-js vjs-default-skin" autoplay='true' preload="auto" data-setup='{"example_option":true}' poster="http://dummyimage.com/320x240/ffffff/fff">
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.ogv#t=1,17" type="video/ogv">
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.webm#t=1,17" type="video/webm">
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.mp4#t=1,17" type="video/mp4">
    <!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
  </video>
</div>
<div class="home-page animation-text-wrapper">
<?php while ( have_posts() ) : the_post(); ?>
  <div class="animation-text">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>
</div>

<div class='rest-of-homepage home-page'>
  <div class="mid-cont home-page desktop mobile">
    <div class='tech-intro'><?php the_field('technology_intro'); ?></div>
    <div class="icon-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_facebook.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_pinterest.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_twitter.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-line-icon.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_video.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_speech2.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_picture.gif">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home_phone.gif">
    </div>
    <?php the_field('work_smarter'); ?>
    <div class="computer-container">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/Product Mock 1 .png"> -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/computer.png">
    </div>
  </div>

  <div class="home-page client-testimonial-wrapper">
    <div class="client-testimonial-carousel flexslider">
      <ul class="slides">
      <?php query_posts( array( 'post_type' => 'client testimonials') ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <div class="mid-cont home-page desktop mobile">
            <?php the_content(); ?>
            <p class="client-name bold-type"><?php the_title(); ?></p>
          </div>
        </li>
      <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </div>

  <div class="home-page client-wrapper">
    <div class="wide-cont clients">
      <ul class="">
      <?php query_posts( array( 'post_type' => 'clients', 'posts_per_page' => 6) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <div class="logo-wrapper">
            <?php the_post_thumbnail(full); ?>
          </div>
        </li>
      <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </div>

  <div class="mid-cont home-page desktop mobile">
    <?php the_field('case_study_intro'); ?>
    <div class="case-study-grid">
      <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'DESC', 'posts_per_page' => -1) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="case-study">
        <a href="<?php the_permalink(); ?>">
          <div class="photo"><?php the_post_thumbnail('large'); ?></div>
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

  <div class="pre-footer-cta">
    <p class="newsletter-signup">Start receiving Adaptly emails monthly</p>
    <form action="//adaptly.us3.list-manage.com/subscribe/post?u=1304346d0242a3209ad4480f9&amp;id=db19f9e852" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-signup" target="_blank" novalidate>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_1304346d0242a3209ad4480f9_db19f9e852" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button" ></div>
    </form>
  </div>
</div>

<!-- <div id="home-overlay">
  <div id="splash-signup">
    <div class="close">✕</div>
    <div class="cont">
      <h2>Adaptly named a Snapchat Partner!</h2>
      <a href="/adaptly-initial-snapchat-partner"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/snapchat_splash.jpg"></a>
       <a href="/adaptly-initial-snapchat-partner">Read about the partnership <span>></span></a>
    </div>
  </div>
</div> -->

<!-- <div id="home-overlay">
  <div id="splash-signup" class="instagram">

    <div class="image-tiles desktop">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image47.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image26.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image3.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/event.png">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image5.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image20.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image42.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image34.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image25.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image14.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image15.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image16.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image30.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image38.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image24.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image12.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image13.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image4.jpg">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image1.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image2.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image3.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image4.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image5.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image6.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image7.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image8.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image9.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image10.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image11.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image12.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image13.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image14.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image15.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image16.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image17.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image18.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image19.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image20.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image21.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image22.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image23.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image24.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image25.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/event.png">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image27.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image28.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image29.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image30.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image31.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image32.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image33.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image34.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image35.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image36.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image37.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image38.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image39.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image40.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image41.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image42.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image43.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image44.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image26.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image46.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image47.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image48.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image49.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image50.jpg">
    </div>
    <div class="image-tiles mobile">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image1.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image5.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image6.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image7.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image14.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image15.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image16.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image17.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image24.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image25.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image45.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image27.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image34.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image35.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image36.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image37.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image44.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image26.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image46.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram/image47.jpg">
    </div>
    <!-- <div class="close">✕</div> -->
    <!-- <div class="cont">
      <a class="table" href="/adaptly-recognized-as-member-of-instagram-partner-program"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/adaptly.png"><!-- <img class="instagram" src="<?php echo get_template_directory_uri(); ?>/images/Instagram_partners_badge.png"> --></a>
      <!-- <h2>Recognized Member of Instagram Partner Program</h2> -->
       <!-- <a href="/adaptly-recognized-as-member-of-instagram-partner-program">Read about the partnership <span>></span></a> -->
    <!-- </div>
  </div>

</div> -->


<?php get_footer(); ?>


<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l47ej', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l47ej&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l47ej&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" /></noscript>
