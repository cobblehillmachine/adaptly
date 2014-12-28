<?php
/**
 * The template for displaying a post as search results
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="post">
  <img src="<?php the_field('thumbnail'); ?>">
  <div class="excerpt">
    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
    <?php the_excerpt('...'); ?>
    <div class="bottom-cont">
        <a href="<?php the_permalink(); ?>">Read More ></a>
        <div class="share">
          <span class="counter-total"></span>
          <?php echo do_shortcode( '[ssba]' ); ?>
        </div>
    </div>
  </div>
</div>
