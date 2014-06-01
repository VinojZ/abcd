<?php get_header(); ?>
	<div class="container">
	<section class="google-custom-search">					
		<div class="engine">
			
			<h1><?php _e("404 - Article Not Found","wpbootstrap"); ?></h1>
		
			<p><?php _e("We can't find what you were looking for.","wpbootstrap"); ?></p>
		
			<p><?php _e("Please try searching below:","wpbootstrap"); ?></p>
			
			<script>
			  (function() {
			    var cx = '015226466563954189157:t0s6vhvyq9k';
			    var gcse = document.createElement('script');
			    gcse.type = 'text/javascript';
			    gcse.async = true;
			    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			        '//www.google.com/cse/cse.js?cx=' + cx;
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
			<gcse:search></gcse:search>
		</div><!-- end .engine -->

	</section>
</div><!-- end .container -->
<?php get_footer(); ?>