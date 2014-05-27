<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div class="image-panel">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/library/img/abcd-home-hero-small.jpg" alt="ABCD Group">
	</div>
	<section class="company-culture" id="company-culture">
		<div class="about-abcd">
			<p>ABCD &amp; Company is a business management-consulting firm that specializes in business start-up, business operations, and business expansion.  We work across industries empowering companies and individuals to become recognized as top performers in their field. We are committed to a standard of excellence driven by people, performance, and product.</p>
		</div>
		<div class="mailing-list">
			<h2>Join our Mailing List</h2>
			<?php if (function_exists('wp_email_capture_form')) { wp_email_capture_form(); } ?>
		</div>
		<div class="beliefs">
			<ul class="nav nav-pills" id="tabs">
				<li><a href="#people" data-toggle="tab">People</a></li>
				<li><a href="#performance" data-toggle="tab">Performance</a></li>
				<li><a href="#product" data-toggle="tab">Product</a></li>
			</ul>
			<div class="tab-content">
				<div class="people tab-pane active" id="people">
					<h3>People</h3>
					<p>People are lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. </p>
					<a class="btn btn-blue" href="#">Learn More</a>
				</div>
				
				<div class="performance tab-pane" id="performance">
					<h3>Performance</h3>
					<p>Performance is adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero.</p>
					<a class="btn btn-blue" href="#">Learn More</a> 
				</div>
				<div class="product tab-pane" id="product">
					<h3>Product</h3>
					<p>Product was onsectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero.</p>
					<a class="btn btn-blue" href="#">Learn More</a> 
				</div>
			</div><!-- end .tab-content -->
		</div><!-- end .beliefs -->
	</section><!-- end .company-culture -->
	<section class="meettheteam" id="meet-the-leadership">
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
			<h5>We want the best</h5>
			<h6>Great people make a great company</h6>
			<a class="btn btn-green" href="#">Join The Team</a>
		</div><!-- end .cta -->               
	</section><!-- end .meet-the-team -->
	<section class="industries" id="industries">
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
			<h5>Lorem ipsum dolor sit</h5>
			<h6>Quisque ornare arcu venenatis felis condimentum</h6>
			<a class="btn btn-green" href="#">Call to Action</a>
		</div><!-- end .cta -->
	</section><!-- end .industries -->
	<section class="services" id="services">
		<div class="description">
			<h2 class="typeSerifHeader typeSerifHeaderWhite">Services</h2>
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
	</section><!-- end .services -->
	<section class="get-started" id="get-started">
		<div class="call-to-action call-to-action-solo">
			<h5>Lorem ipsum dolor sit</h5>
			<h6>Quisque ornare arcu venenatis felis condimentum</h6>
			<a class="btn btn-blue" href="#">Call to Action</a>
		</div><!-- end .cta -->
	</section><!-- end .get-started -->


	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/library/js/vendor/min/abcd-home-ck.js">

<?php get_footer(); ?>