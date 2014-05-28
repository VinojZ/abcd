<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<section class="google-custom-search">

	<div class="engine">
		<script>
		  (function() {
		    var cx = '009537608922408596453:rzqggn28qgk';
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


<?php get_footer(); ?>