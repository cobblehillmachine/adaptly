<?php get_header(); ?>
<div class="mid-cont services">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <div class="computer-animation">
      <img src="<?php echo get_template_directory_uri(); ?>/images/computer_graphic.svg">
      <video width="480" height="320" autoplay="autoplay" loop>
        <source src="<?php echo get_template_directory_uri(); ?>/images/technology_animation.mp4" type="video/mp4" >
      </video>
    </div>
  <?php endwhile; wp_reset_query(); ?>
</div>

<div class="deploy-manage-analyze">
  <div class="mid-cont">
    <?php the_field('deploy_manage_analyze'); ?>
    <div class="computer-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/technology_computer.png">

    </div>
  </div>
</div>

<div class="maximum-effect">
  <div class="mid-cont">
    <?php the_field('maximum_effect'); ?>
    <section id="dg-container" class="dg-container">
      <div class="dg-wrapper">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/technology_carousel_01.png"></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/technology_carousel_02.png"></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/technology_carousel_03.png"></a>
      </div>
    </section>
  </div>
</div>

<div class="work-smarter mid-cont">
  <?php the_field('work_smarter'); ?>
</div>

<div class="emphasize-adaptability">
  <div class="mid-cont">
    <?php the_field('emphasize_adaptability'); ?>
  </div>
</div>


<div class="pre-footer-cta">
  <p class="request-demo-cta ">Start using Adaptly technology today<button>Request Demo</button></p>
</div>
<div class="request-demo-form technology contact mid-cont">
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00Dd0000000ezSf">
    <input type=hidden name="retURL" value="http://www.adaptly.com">
    <div class="form-left">
      <label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>
      <label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>
      <label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>
    </div>
    <div class="form-right">
      <label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" /><br>
      <label for="city">City</label><input  id="city" maxlength="40" name="city" size="20" type="text" /><br>
      <label for="state">State/Province</label><input  id="state" maxlength="20" name="state" size="20" type="text" /><br>
    </div>
    <input type="submit" name="submit">
  </form>
</div>

<script type="text/javascript">
  $(function() {
    $('#dg-container').gallery({
      autoplay  : true,
      interval : 5000
    });
  });
</script/>

<?php get_footer(); ?>
