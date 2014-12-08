<?php get_header(); ?>
<div class="mid-cont contact">
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
