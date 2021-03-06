<?php
// template for single case study
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="header-image"><img src="<?php the_field('header_image'); ?>"></div>
  <?php $if_has_demo = get_field('pdf_for_download');
  if ($if_has_demo) {?>
<div class="post-header-cta-wrapper">
  <div class="post-header-cta mid-cont">
    <p class="case-study-download">Download the full case study.<a>DOWNLOAD</a></p>
  </div>
</div>
  <div class="request-demo-form contact case-study mid-cont post-header">
    <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" onsubmit="window.open('<?php the_field('pdf_for_download'); ?>')">
    <input type=hidden name="oid" value="00Dd0000000ezSf">
    <?php $custom_input = get_field('custom_form');
    if ($custom_input) {
      echo $custom_input;
    } ?>
    <div class="form-left">
      <label for="first_name">First Name*</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required/><br>
       <label for="email">Email*</label><input  id="email" maxlength="80" name="email" size="20" type="text" required/><br>
    </div>
    <div class="form-right">
	    <label for="last_name">Last Name*</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required/><br> 
      <label for="company">Company*</label><input  id="company" maxlength="40" name="company" size="20" type="text" required/><br>
    </div>
    <input type="submit" name="submit" >
  </form>

  </div>

  <?php } ?>

  <p  class="back-to-feed"><a href="/resources/case-studies">< All Case Studies</a></p>

<div class="mid-cont case-study">
	<?php the_content() ?>
</div>
<div class="stats-wrapper">
	<div class="mid-cont case-study">
		<div><?php the_field('stats'); ?></div>
	</div>
  <div class="tooltip"></div>
</div>

<div class="mid-cont case-study bottom-content-wrapper">
  <?php $full = get_field('bottom_content_full_width');
  if ($full) { ?>
    <div class="bottom-content full">
      <?php the_field('bottom_content_full_width'); ?>
    </div>
  <?php } else { ?>
    <div class="bottom-content half">
      <div class="left">
        <?php the_field('bottom_content_half_width_left'); ?>
      </div>
      <div class="right">
        <?php the_field('bottom_content_half_width_right'); ?>
      </div>
    </div>
  <?php } ?>
</div>

<?php $if_has_demo = get_field('pdf_for_download');
  if ($if_has_demo) {?>
<div class="pre-footer-cta">
  <p class="case-study-download">Download the full case study.<a>DOWNLOAD</a></p>
</div>
<div class="request-demo-form contact case-study mid-cont pre-footer">
    <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" onsubmit="window.open('<?php the_field('pdf_for_download'); ?>')">
    <input type=hidden name="oid" value="00Dd0000000ezSf">
    <?php $custom_input = get_field('custom_form');
    if ($custom_input) {
      echo $custom_input;
    } ?>
    <div class="form-left">
      <label for="first_name">First Name*</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required/><br>
       <label for="email">Email*</label><input  id="email" maxlength="80" name="email" size="20" type="text" required/><br>
    </div>
    <div class="form-right">
	    <label for="last_name">Last Name*</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required/><br> 
      <label for="company">Company*</label><input  id="company" maxlength="40" name="company" size="20" type="text" required/><br>
    </div>
    <input type="submit" name="submit">
  </form>
  </div>
<?php } ?>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
