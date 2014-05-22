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
					
					<nav>
						<h3>Industries</h3>
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					<div class="latest-tweet">
						We proudly announce our new website launch; please visit <a href="#">The ABCD Company</a>
					</div><!-- Chris, please add whichever plugin you'd like that's easiest to style -->
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