<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div class="image-panel">
		<div class="wrapper">
			<img src="http://placehold.it/1170x370">
		</div>
	</div>
	<section class="company-culture">
		<div class="about-abcd">
			<p>ABCD &amp; Company is a business management-consulting firm that specializes in business start-up, business operations, and business expansion.  We work across industries empowering companies and individuals to become recognized as top performers in their field. We are committed to a standard of excellence driven by people, performance, and product.</p>
		</div>
		<div class="mailing-list">
			<h2>Join our Mailing List</h2>
			<p>Chris, you can fill in the plugin here</p>
			<?//php get_sidebar(); // sidebar 1 -- use this to pull in a mailing list plugin ?>
		</div>
		<div class="beliefs">
			<div class="people">
				<h3>People</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi. 
				<a class="learn-more" href="#">Learn More</a>
			</div>
			
			<div class="performance">
				<h3>Performance</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi.
				<a class="learn-more" href="#">Learn More</a> 
			</div>
			<div class="product">
				<h3>Product</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi.
				<a class="learn-more" href="#">Learn More</a> 
			</div>
		</div><!-- end .beliefs -->
	</section><!-- end .company-culture -->
	<section class="meet-the-team">
		<div class="meet-the-leadership">
			<h1>Meet the Leadership</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing el</p>
        </div><!-- end .meet-the-leadership -->
		<div class="member">
			<img src="http://placehold.it/330x268">
			<p>Amber Dozier Managing Partner</p>
			<p>Policy &amp; Compliance</p>
		</div><!-- end .member -->
		<div class="member">
			<img src="http://placehold.it/330x268">
			<p>Brittanye Calhoun Managing Partner</p>
			<p>Innovation &amp; Design</p>
		</div><!-- end .member -->               
	</section><!-- end .meet-the-team -->
	<section class="industries">
	</section>
	<section class="services">
	</section>
	<section class="get-started">
	</section>
<?php get_footer(); ?>