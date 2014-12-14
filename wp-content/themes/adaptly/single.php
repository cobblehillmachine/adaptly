<?php
// template for single case study
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header-image"><img src="<?php the_field('header_image'); ?>"></div>
<div class="post-header-cta">
  <p class="pdf-download">Download the full case study.<a href="<?php the_field('pdf_for_download'); ?>">DOWNLOAD</a></p>
</div>
<div class="mid-cont">
	<?php the_content() ?>
</div>
<div class="stats-wrapper">
	<div class="mid-cont">
		<div><?php the_field('stats'); ?></div>
	</div>
</div>

<div class="mid-cont bottom-content">
	<?php the_field('bottom_content'); ?>
</div>



<div class="pre-footer-cta">
  <p class="pdf-download">Download the full case study.<a href="<?php the_field('pdf_for_download'); ?>">DOWNLOAD</a></p>
</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
