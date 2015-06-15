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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-58869702-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script type="text/javascript" language="javascript">
      var tl813v = 21993;
      (function() {
	      var tl813 = document.createElement('script'); tl813.type = 'text/javascript'; tl813.async = true;
	      tl813.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + '1.tl813.com/tl813.js';
	      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tl813, s);
	      })();
	</script>
	<script src="//use.typekit.net/jjt5ytw.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script>(function() {
	  var _fbq = window._fbq || (window._fbq = []);
	  if (!_fbq.loaded) {
	    var fbds = document.createElement('script');
	    fbds.async = true;
	    fbds.src = '//connect.facebook.net/en_US/fbds.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(fbds, s);
	    _fbq.loaded = true;
	  }
	  _fbq.push(['addPixelId', '1381276575524067']);
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1381276575524067&amp;ev=PixelInitialized" /></noscript>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/adaptly.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery.sidr.dark.css" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/blur.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.gallery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.53451.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/adaptly.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div id="side-nav">
		<?php wp_nav_menu( array( 'menu' => '3' ) ); ?>
	</div>

<div class="body">

	<header id="masthead" class="site-header" role="banner">
		<div class="logo">
			<a href="/">
				<?php if (is_page('13') || is_single()) { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo_white.gif">
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/adaptly_logo_blue.gif">
				<?php } ?>
			</a>
		</div>
		<div class="main-nav desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="main-nav mobile">
			<a class="nav-trigger">
				<?php if (is_page('13') || is_single()){ ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/white_hamburger.gif" class='white-hamburger'>
				 <?php }  else { ?>
				 	<img src="<?php echo get_template_directory_uri(); ?>/images/blue_hamburger.gif" class='blue-hamburger'>
				 <?php } ?>
  		</a>
		</div>
		<script>
		$('.nav-trigger').on('click', function(e) {
    console.log('nav click')
    e.preventDefault();
    showNav();
  })
  $('.body').on('click', function() {
    if ($('#side-nav').css('width') == '200px') {
       hideNav();
    }
  })
  </script>
	</header><!-- #masthead -->


