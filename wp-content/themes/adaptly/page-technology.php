<?php get_header(); ?>
<div class="mid-cont services">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
  <?php endwhile; wp_reset_query(); ?>

  <?php the_field('deploy_manage_analyze'); ?>
<div class="svg-container">
  <?php the_field('work_smarter'); ?>
</div>
  <?php the_field('emphasize_adaptability'); ?>

</div>


<?php get_footer(); ?>
