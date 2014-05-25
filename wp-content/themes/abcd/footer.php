			<footer role="contentinfo" class="footer">
			
				<div id="inner-footer" class="clearfix">
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
					<div class="icon-socialmedia-set">
						<a href="#"><i class="icon icon-socialmedia icon-socialmedia-twitter">Twitter</i></a>
						<a href="#"><i class="icon icon-socialmedia icon-socialmedia-instagram">Instagram</i></a>
						<a href="#"><i class="icon icon-socialmedia icon-socialmedia-facebook">Facebook</i></a>
					</div>
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end .container (opened in header file)-->
				
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