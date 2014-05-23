<?php get_header(); ?>

	<div class="main-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<header>
				
				<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
			
			</header> <!-- end article header -->

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare nec urna sit amet venenatis. Proin vel diam pellentesque, scelerisque mi at, rhoncus dolor. Integer pharetra ut nulla ac adipiscing. Ut iaculis lorem tellus, ac pellentesque tellus varius ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque feugiat urna vitae mauris aliquam vulputate. Suspendisse ullamcorper felis a nulla interdum aliquet. Cras adipiscing, augue sed vestibulum auctor, justo purus luctus velit, eu molestie libero massa quis velit. Duis vehicula, felis tincidunt mollis congue, neque urna tincidunt nunc, sed mollis justo nisl vel velit. Quisque id mattis metus, a fermentum est. Proin quis cursus orci, eget porttitor orci. Curabitur blandit eleifend dui, eu aliquet nunc luctus non. Etiam suscipit tincidunt augue. Proin vitae arcu non magna hendrerit pretium. Ut ornare dolor nec neque mattis interdum. Vivamus aliquam iaculis sem non scelerisque.</p>
		
			<section class="post_content clearfix" itemprop="articleBody">
				<?php the_content(); ?>
		
			</section> <!-- end article section -->
			
			<footer>

				<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
				
			</footer> <!-- end article footer -->
		
		</article> <!-- end article -->
		
		<?php endwhile; ?>		
		
		<?php else : ?>
		
		<article id="post-not-found">
		    <header>
		    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
		    </header>
		    <section class="post_content">
		    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
		    </section>
		    <footer>
		    </footer>
		</article>
		
		<?php endif; ?>
	</div> <!-- end .main-content -->

<?php get_footer(); ?>