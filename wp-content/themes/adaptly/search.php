<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php query_posts( array( 'page_id' => 286 ) ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="resources mid-cont">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>

<div class="resources subnav mid-cont">
  <ul>
    <li class="blog"><a href=<?php site_url(); ?>'/resources/blog' class='active'>Blog</a></li>
    <li class="case-studies"><a href=<?php site_url(); ?>'/resources/case-studies'>Case Studies</a></li>
    <li class='press'><a href=<?php site_url(); ?>'/resources/press'>Press</a></li>
    <li><?php get_search_form(  ); ?></li>
  </ul>
</div>

<h4 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h4>

<?php if ( have_posts() ) : ?>
<div class="blog resources mid-cont">
  <div id="blog" class="blog-feed ">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'search' );
			endwhile; ?>
			<div class="pagination">
        <?php previous_posts_link( '< Newer Entries' ); ?>
        <?php next_posts_link( 'Older Entries >', 0 ); wp_reset_postdata(); ?>
      </div>
		<?php else :
			get_template_part( 'content', 'none' );
		endif; ?>
	</div>
</div>
<?php get_footer();
