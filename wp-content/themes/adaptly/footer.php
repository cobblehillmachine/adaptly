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
						<p><a href="mailto:<?php the_field('main_email_address', 'user_2') ?>"><?php the_field('main_email_address', 'user_2') ?></a></p>
					</div>
				</a>
				<a href="https://jobs.lever.co/adaptly " class="mobile">
					<div class="section careers">
						<h3>Join Our Team</h3>
					</div>
				</a>
				<a href="/careers" class="desktop">
					<div class="section careers">
						<h3>Join Our Team</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer_connect.png">
						<p>We're hiring!</p>
						<p>Check out our job listings</p>
					</div>
				</a>
				<a href="/partners">
					<div class="section partners">
						<h3>Partners</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer_partners.png">
						<p>Learn more about<br>our partnerships here</p>
					</div>
				</a>
				<div class="section social">
					<h3>Let's Connect</h3>
					<a target=_blank href="<?php the_field('facebook_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_facebook.png"></a>
					<a target=_blank href="<?php the_field('twitter_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_twitter.png"></a>
					<a target=_blank href="<?php the_field('pinterest_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_pinterest.png"></a>
					<a target=_blank href="<?php the_field('instagram_link', 'user_2') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_instagram.png"></a>
					<p class="copyright"><?php the_field("copyright", "user_2") ?></p>
					<p><a href="/privacy"><?php the_field("privacy_link", "user_2") ?></a></p>
				</div>
			</div>
		</footer><!-- #colophon -->


<script type="text/javascript">
piAId = '187182';
piCId = '1180';

(function() {
function async_load(){
var s = document.createElement('script'); s.type = 'text/javascript';
s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
}
if(window.attachEvent) { window.attachEvent('onload', async_load); }
else { window.addEventListener('load', async_load, false); }
})();
</script>

	<?php wp_footer(); ?>
</body>
</html>
