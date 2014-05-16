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
			<ul class="nav nav-pills" id="tabs">
				<li><a href="#people" data-toggle="tab">People</a></li>
				<li><a href="#performance" data-toggle="tab">Performance</a></li>
				<li><a href="#product" data-toggle="tab">Product</a></li>
			</ul>
			<div class="tab-content">
				<div class="people tab-pane active" id="people">
					<h3>People</h3>
					People are lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi. 
					<a class="learn-more" href="#">Learn More</a>
				</div>
				
				<div class="performance tab-pane" id="performance">
					<h3>Performance</h3>
					Performance is adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi.
					<a class="learn-more" href="#">Learn More</a> 
				</div>
				<div class="product tab-pane" id="product">
					<h3>Product</h3>
					Product was onsectetur adipiscing elit. Nullam iaculis lectus massa, ac varius neque laoreet ac. Morbi nulla diam, fringilla vitae porta quis, egestas ac libero. Morbi iaculis, neque id malesuada porttitor, diam lacus elementum dolor, at scelerisque leo leo lobortis nisi.
					<a class="learn-more" href="#">Learn More</a> 
				</div>
			</div><!-- end .tab-content -->
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
	<script>
	  	(function($){
			$('#tabs a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});
			
			if (screen.width > 480) {
				$('.tab-content').removeClass().addClass('wrapper');
			}

		})(jQuery);
	</script>

<?php get_footer(); ?>