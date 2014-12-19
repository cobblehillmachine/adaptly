<?php get_header(); ?>
<div class="about-header">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="mid-cont">
      <?php the_content(); ?>
    </div>
</div>
<div class="subnav-wrapper">
  <div class="subnav mid-cont about">
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
      <?php query_posts( array( 'post_type' => 'team members', 'order' => "ASC", 'posts_per_page' => 20) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="team-member">
        <?php the_post_thumbnail('full'); ?>
        <div class="header">
          <div class="info">
            <p class="name blue"><?php the_title(); ?></p>
            <p class="title"><?php the_field("title"); ?></p>
          </div>
          <div class="icons">
            <a href="<?php the_field("facebook_link"); ?>" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/team_member_facebook_icon.png"></a>
            <a href="<?php the_field("twitter_link"); ?>" class="twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/team_member_twitter_icon.png"></a>
          </div>
        </div>
        <?php the_content();?>
      </div>
      <?php endwhile; wp_reset_query(); ?>
      </div>
</div>

  <?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
