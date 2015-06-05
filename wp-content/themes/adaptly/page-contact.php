<?php get_header(); ?>
<div class="mid-cont contact">
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>
</div>


<div class="map">
  <div class="mid-cont contact">
    <h3>Locate Us</h3>
    <?php query_posts( array( 'post_type' => 'locations', 'order' => "ASC") ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="location">
        <h4><?php the_title(); ?></h4>
        <?php $address = get_the_content(); ?>
        <a target=_blank href="https://maps.google.com?q=<?php echo $address ?>"><?php the_content() ?></a>
      </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<div class="contact big-logo">
  <div class="mid-cont contact">
    <img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo_remarkable.png">
  </div>
</div>

<?php get_footer(); ?>
