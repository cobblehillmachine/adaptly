<?php get_header(); ?>
<div class="about-header">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="mid-cont">
      <?php the_content(); ?>
    </div>
</div>
<div class="subnav-wrapper">
  <div class="subnav mid-cont">
    <ul>
      <li><a href="#what">what</a></li>
      <li><a href="#why">why</a></li>
      <li><a href="#who">who</a></li>
    </ul>
  </div>
</div>
<div id="what" class="about frontlines">
    <div class="mid-cont">
      <?php the_field('on_the_frontlines') ?>
    </div>
</div>
<div id="why" class="about something-bigger">
    <div class="mid-cont">
      <?php the_field('something_bigger') ?>
    </div>
</div>

<div id="who" class="about meet-our-team">
    <div class="mid-cont">
      <div class="bold-type"><?php the_field('meet_our_team') ?></div>
      <h4>Coming Soon :)</h4>
    </div>
</div>

  <?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
