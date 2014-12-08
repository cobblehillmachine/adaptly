<?php get_header(); ?>
<div class="about-header">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="mid-cont">
      <?php the_content(); ?>
    </div>
</div>
<div class="about frontlines">
    <div class="mid-cont">
      <?php the_field('on_the_frontlines') ?>
    </div>
</div>
<div class="about something-bigger">
    <div class="mid-cont">
      <?php the_field('something_bigger') ?>
    </div>
</div>
<div class="about remarkability">
    <div class="mid-cont">
      <?php the_field('remarkability') ?>
    </div>
</div>
<div class="about meet-our-team">
    <div class="mid-cont">
      <div class="bold-type"><?php the_field('meet_our_team') ?></div>
      <?php query_posts( array( 'post_type' => 'team members') ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="team-member">
          <div class=""><?php the_post_thumbnail('full'); ?></div>
          <div class="bold-type name"><?php the_title(); ?></div>
          <div class="title"><?php the_content(); ?></div>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
</div>

  <?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
