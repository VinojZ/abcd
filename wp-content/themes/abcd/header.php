<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '| ABCD Company', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>
		<header role="banner">

			<div class="fm-container main-menus">
				<div class="fm-button"><span class="fm-bar"></span><span class="fm-bar"></span><span class="fm-bar"></span></div>
				<div class="site-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="icon-socialmedia-set icon-socialmedia-set-header">
					<a href="#"><i class="icon icon-socialmedia icon-socialmedia-twitter">Twitter</i></a>
					<a href="#"><i class="icon icon-socialmedia icon-socialmedia-instagram">Instagram</i></a>
					<a href="#"><i class="icon icon-socialmedia icon-socialmedia-facebook">Facebook</i></a>
				</div>
				<div class="menu">
					<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
				</div>
			</div> <!-- end .fm-container -->
		
		</header> <!-- end header -->
