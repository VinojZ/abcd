<?php get_header(); ?>
			

<main class="main-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="meta">
			<div class="category">ABCD Institute &raquo; <?php the_category(', '); ?></div>
			<div class="logo"><img src="http://placehold.it/130x60"></div>
		</div>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<header>
				<?php the_post_thumbnail( 'wpbs-featured' ); ?>
				<div class="page-header">
					<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
				</div>
			</header> <!-- end article header -->

			<section class="post_content clearfix" itemprop="articleBody">
				
				<?php the_content(); ?>
				
				<?php wp_link_pages(); ?>

			</section> <!-- end article section -->
			
			<footer>

				<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
				
				<?php 
				// only show edit button if user has permission to edit posts
				if( $user_level > 0 ) { 
				?>
				<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
				<?php } ?>
				
			</footer> <!-- end article footer --> 
		</article> <!-- end article -->
		
		<div class="comments">
			<?php comments_template(); ?>
		</div>

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

	<section class="get-started call-to-action">
		<div class="description">
			<h3>Get started with ABCD today</h3>
			<p>Your pathway to success begins here</p>
		</div>
		<a class="button" href="#">Contact Us</a>
	</section><!-- end .get-started -->

</main><!-- end .main-content -->

<?php get_footer(); ?>