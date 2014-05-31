			<footer role="contentinfo" class="footer">
				
				<div id="inner-footer" class="inner-footer">
					
					<div class="wrapper">

							

							<nav class="footer__industries">
								<h3 class="footer-title typeSerifHeaderRed">Industries</h3>
								<div class="footer-menu">
									<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
								</div>
							</nav>
							
							<div class="footer__sidebars">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
								<?php endif; ?>
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
								<?php endif; ?>
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
								<?php endif; ?>
							</div>
							
							<div class="latest-tweet">
								<a class="twitter-timeline" href="https://twitter.com/tgChrisPorter" data-widget-id="472260620625010688" data-tweet-limit="1">Tweets by @tgChrisPorter</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>

							<div class="icon-socialmedia-set icon-socialmedia-set-footer">
								<a href="#"><i class="icon icon-socialmedia icon-socialmedia-twitter">Twitter</i></a>
								<a href="#"><i class="icon icon-socialmedia icon-socialmedia-instagram">Instagram</i></a>
								<a href="#"><i class="icon icon-socialmedia icon-socialmedia-facebook">Facebook</i></a>
							</div>


					</div> <!-- end .wrapper -->

				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"c39b97a4-66f9-4d1a-ae38-2e50543af700"});var st_type="wordpress3.9.1";</script>
		 <script>
		    (function($){
		      $('header .menu').flexMenu({
		        responsivePattern: 'off-canvas',
		        breakpoint: 1025
		      });
		    })(jQuery);
  		</script>
	</body>

</html>