			<footer role="contentinfo" class="footer">
			
				<div id="inner-footer" class="clearfix">
					<div class="container">
						<div id="widget-footer" class="clearfix row">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
							<?php endif; ?>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
							<?php endif; ?>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
							<?php endif; ?>
						</div>
					
						<nav class="footer-nav">
							<h3 class="footer-title typeSerifHeaderRed">Industries</h3>
							<div class="footer-menu">
								<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
							</div>
						</nav>

						<div class="latest-tweet">
							<a class="twitter-timeline" href="https://twitter.com/tgChrisPorter" data-widget-id="472260620625010688" data-tweet-limit="1">Tweets by @tgChrisPorter</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>

						<div class="icon-socialmedia-set icon-socialmedia-set-footer">
							<a href="#"><i class="icon icon-socialmedia icon-socialmedia-twitter">Twitter</i></a>
							<a href="#"><i class="icon icon-socialmedia icon-socialmedia-instagram">Instagram</i></a>
							<a href="#"><i class="icon icon-socialmedia icon-socialmedia-facebook">Facebook</i></a>
						</div>

					</div> <!-- end .container -->

				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		 <script>
		    (function($){
		      $('header .menu').flexMenu({
		        responsivePattern: 'off-canvas'
		      });
		    })(jQuery);
  		</script>
	</body>

</html>