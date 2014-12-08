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

		</div><!-- #main -->

			<?php if (is_page('7')) { ?>
			<div class="pre-footer-cta">
				<p class="request-demo-cta ">Start using Adaptly technology today<button>Request Demo</button></p>
			</div>
			<div class="request-demo-form contact mid-cont">
				<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
					<input type=hidden name="oid" value="00Dd0000000ezSf">
					<input type=hidden name="retURL" value="http://www.adaptly.com">
					<div class="form-left">
						<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>
						<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>
						<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>
					</div>
					<div class="form-right">
						<label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" /><br>
						<label for="city">City</label><input  id="city" maxlength="40" name="city" size="20" type="text" /><br>
						<label for="state">State/Province</label><input  id="state" maxlength="20" name="state" size="20" type="text" /><br>
					</div>
					<input type="submit" name="submit">
				</form>
			</div>
			<? } else { ?>
			<div class="pre-footer-cta">
				<p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
			</div>
			<?php } ?>

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
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_facebook.png"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer_twitter.png"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer_pinterest.png"></a>
					<p><?php the_field("copyright", "user_2") ?></p>
				</div>
			</div>
		</footer><!-- #colophon -->


	<?php wp_footer(); ?>
</body>
</html>
