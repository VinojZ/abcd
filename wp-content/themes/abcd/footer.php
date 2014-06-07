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
								<h3 class="footer-title typeSerifHeaderRed">Navigate</h3>
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
								<a href="http://www.twitter.com/theabcdcompany" target="_blank"><i class="icon icon-socialmedia icon-socialmedia-twitter">Twitter</i></a>
								<a href="http://www.instagram.com/theabcdcompany" target="_blank"><i class="icon icon-socialmedia icon-socialmedia-instagram">Instagram</i></a>
								<a href="http://www.facebook.com/theabcdcompany" target="_blank"><i class="icon icon-socialmedia icon-socialmedia-facebook">Facebook</i></a>
							</div>


					</div> <!-- end .wrapper -->

				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
		<!-- FlexMenu Configuration -->
		<script>
		    (function($){
		      $('header .menu').flexMenu({
		        responsivePattern: 'off-canvas',
		        breakpoint: 1025
		      });
		    })(jQuery);
  		</script>
  		
  		<!-- ShareThis -->
  		<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
  		<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  		<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"e8b4d0ff-e7c2-42a2-a2e8-564bb3888ba0","doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress3.9.1";</script>
  		

  		<!-- Google Analytics Account -->
  		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51539101-1', 'theabcdcompany.com');
		  ga('send', 'pageview');
		</script>

	</body>

</html>