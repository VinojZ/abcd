<?php
/*
Template Name: Homepage
*/
?>

<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php bloginfo('name'); ?></title>	
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
		<div class="image-panel image-panel-home"></div>
		<section class="company-culture" id="company-culture">

			<div class="company-culture-intro">
				<div class="container">
					<div class="about-abcd">
							<p>ABCD &amp; Company is a business management-consulting firm that specializes in business start-up, business operations, and business expansion.  We work across industries empowering companies and individuals to become recognized as top performers in their field. We are committed to a standard of excellence driven by people, performance, and product.</p>
					</div>
					<div class="mailing-list">
						<h2>Join our Mailing List</h2>
						<?php if (function_exists('wp_email_capture_form')) { wp_email_capture_form(); } ?>
					</div>
				</div>
			</div>

			<div class="beliefs">
				<ul class="nav nav-pills" id="tabs">
					<li><a href="#people" data-toggle="tab">People</a></li>
					<li><a href="#performance" data-toggle="tab">Performance</a></li>
					<li><a href="#product" data-toggle="tab">Product</a></li>
				</ul>
				<div class="container">
					<div class="tab-content">
						<div class="people tab-pane active" id="people">
							<h3>People</h3>
							<p>People are lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. </p>
						</div>
						
						<div class="performance tab-pane" id="performance">
							<h3>Performance</h3>
							<p>Performance is adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero.</p>
						</div>
						<div class="product tab-pane" id="product">
							<h3>Product</h3>
							<p>Product was onsectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero.</p>
						</div>
					</div><!-- end .tab-content -->
				</div>
			</div><!-- end .beliefs -->

		</section><!-- end .company-culture -->

		<section class="meettheteam" id="meet-the-leadership">

			<div class="container">
				<div class="description">
					<h2 class="meettheteam-title">Meet the Team</h2>
					<p>Our leadership team is comprised of talented and highly respected industry leaders across various disciplines. At ABCD & Company, we believe in leaders who take a hands-on approach and have the pulse of our clients and growing trends in our industries.</p>
		        </div><!-- end .meet-the-leadership -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="member">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-team-fpo-small.jpg">
					<p class="team-meta">
						<span class="team-meta-name">Stephen Miller</span>
						<span class="team-meta-title">Art Director</span>
						<span class="team-meta-division">Innovation &amp; Design</span>
					</p>
				</div><!-- end .member -->
				<div class="call-to-action">
					<div class="call-to-action-inner">
						<h5>We want the best</h5>
						<h6>Great people make a great company</h6>
						<a class="btn btn-green" href="#">Join The Team</a>
					</div>
				</div><!-- end .cta --> 
			</div>              
		</section><!-- end .meet-the-team -->

		<section class="industries" id="industries">
			<div class="container">
				<div class="description">
					<h2 class="industries-title">Industries</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare arcu venenatis felis condimentum, id commodo nisl malesuada. Proin varius lectus vitae odio mattis feugiat. Ut quis massa neque. Aenean neque turpis, dignissim non condimentum sed.</p>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="industry">
					<img src="http://placehold.it/330x268">
					<h3 class="industry-title">Higher Education</h3>
					<ol class="industry-list">
						<li class="industry-list-title">Services we provide</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
						<li>Stakeholder Branding</li>
					</ol>
				</div>
				<div class="call-to-action">
					<div class="call-to-action-inner">
						<h5>We want the best</h5>
						<h6>Great people make a great company</h6>
						<a class="btn btn-green" href="#">Join The Team</a>
					</div>
				</div><!-- end .cta -->
			</div>
		</section><!-- end .industries -->

		<section class="services" id="services">
			<div class="container">
				<div class="description">
					<h2>Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare arcu venenatis felis condimentum, id commodo nisl malesuada. Proin varius lectus vitae odio mattis feugiat. Ut quis massa neque. Aenean neque turpis, dignissim non condimentum sed.</p>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-stakeholderbranding">Stakeholder Branding</i>
					<h3 class="service-title">Stakeholder Branding</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-projectmanagement">Stakeholder Branding</i>
					<h3 class="service-title">Project Management</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-businesscharterservices">Stakeholder Branding</i>
					<h3 class="service-title">Business Charter Services</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-businessdevservices">Stakeholder Branding</i>
					<h3 class="service-title">Business Development Services</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-changemanagement">Stakeholder Branding</i>
					<h3 class="service-title">Change Management</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-humanresourceconsultant">Stakeholder Branding</i>
					<h3 class="service-title">Human Resource Consultant</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
				<div class="service">
					<i class="icon icon-services icon-services-corporatetraining">Stakeholder Branding</i>
					<h3 class="service-title">Corporate Training and Development</h3>
					<ol class="service-list">
						<li>Strategic Branding Events</li>
						<li>Image Consulting</li>
						<li>Fundraising Events</li>
						<li>Private Events</li>
					</ol>
				</div>
			</div>
		</section><!-- end .services -->
		<section class="get-started" id="get-started">
			<div class="container">
				<div class="call-to-action call-to-action-solo">
					<div class="call-to-action-inner">
						<h5>We want the best</h5>
						<h6>Great people make a great company</h6>
						<a class="btn btn-blue" href="#">Join The Team</a>
					</div>
				</div><!-- end .cta -->
			</div>
		</section><!-- end .get-started -->


		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/library/js/vendor/min/abcd-home-ck.js"></script>

<?php get_footer(); ?>