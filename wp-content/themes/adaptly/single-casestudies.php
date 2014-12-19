<?php
// template for single case study
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="header-image"><img src="<?php the_field('header_image'); ?>"></div>
  <?php $if_has_demo = get_field('pdf_for_download');
  if ($if_has_demo) {?>
  <div class="post-header-cta">
    <p class="pdf-download">Download the full case study.<a href="<?php the_field('pdf_for_download'); ?>" target=_blank>DOWNLOAD</a></p>
  </div>
  <?php } ?>
<div class="mid-cont">
	<?php the_content() ?>
</div>
<div class="stats-wrapper">
	<div class="mid-cont">
		<div><?php the_field('stats'); ?></div>
	</div>
  <div class="tooltip"></div>
</div>

<div class="mid-cont bottom-content-wrapper">
  <? $full = get_field('bottom_content_full_width');
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
  <p class="pdf-download">Download the full case study.<a href="<?php the_field('pdf_for_download'); ?>" target=_blank>DOWNLOAD</a></p>
</div>
<?php } ?>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
