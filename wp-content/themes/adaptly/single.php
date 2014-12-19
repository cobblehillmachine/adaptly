<?php
// template for single blog post
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header-image"><?php the_post_thumbnail('full'); ?></div>
<div class="pre-footer-cta">
  <p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
</div>
<div class="mid-cont blog-post">
  <h3><?php the_title(); ?></h3>
  <span class='date'><?php the_field('date'); ?></date>
  <?php the_content(); ?>
</div>
<div class="post-share">
  <div><a href="http://twitter.com/share?url=<?php the_permalink(); ?>">Share This on Twitter</a></div>
  <div><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Share This Link on Facebook</a></div>
  <div><a HREF="mailto:?body=Hi,check out this post by Adaptly: <?php the_permalink(); ?>">tell a friend</a></div>

</div>
<div class="author-wrapper">
  <div class="author mid-cont">
  <?php $author = get_field('author');
  if ($author) { ?>
    <img src="<?php the_field('author_image'); ?>">
    <div class="author-info">
      <?php the_field('author'); ?>
      <p></p>
    </div>
  <?php } ?>
  </div>
</div>
<div class="pre-footer-cta">
  <p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
