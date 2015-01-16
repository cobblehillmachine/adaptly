<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #body -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrapper">
				<a href="/contact">
					<div class="section contact">
						<h3>Contact</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer_contact.png">
						<p><?php the_field('main_phone_number', 'user_2') ?></p>
						<p><a href="mailto:<?php the_field('main_email_address', 'user_2') ?>"><?php the_field('main_email_address', 'user_2') ?></a></p>
					</div>
				</a>
				<a href="/careers">
					<div class="section careers">
						<h3>Join Our Team</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer_connect.png">
						<p>We're hiring!</p>
						<p>Check out our job listings</p>
					</div>
				</a>
				<a href="partners">
					<div class="section partners">
						<h3>Partners</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer_partners.png">
						<p>Learn more about<br>our partnerships here</p>
					</div>
				</a>
				<div class="section social">
					<h3>Let's Connect</h3>
					<a href="<?php the_field('facebook_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_facebook.png"></a>
					<a href="<?php the_field('twitter_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_twitter.png"></a>
					<a href="<?php the_field('pinterest_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_pinterest.png"></a>
					<p><?php the_field("copyright", "user_2") ?></p>
				</div>
			</div>
		</footer><!-- #colophon -->


	<?php wp_footer(); ?>
</body>
</html>
