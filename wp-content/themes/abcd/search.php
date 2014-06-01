<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>
<div class="container">
	<section class="google-custom-search">

		<div class="engine">
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