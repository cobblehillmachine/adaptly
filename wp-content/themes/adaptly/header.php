<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/Favicon.png" />
	<script src="//use.typekit.net/jjt5ytw.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/blur.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.gallery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.53451.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/adaptly.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/adaptly.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
		<div class="logo">
			<a href="/">
				<?php if (is_page('13')) { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo_white.png">
				<?php } else if (is_single()) { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo_white.png">
				 <?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo.png">
				<?php } ?>
			</a>
		</div>
		<div class="main-nav desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="main-nav mobile">
			<?php wp_nav_menu( array( 'menu' => '3' ) ); ?>
		</div>
	</header><!-- #masthead -->

