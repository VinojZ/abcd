<?php get_header(); ?>
			

<main class="main-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="meta">
			<div class="category"><a href="/the-abcd-institute" title="The ABCD Institute">&laquo; The ABCD Institute</a></div>
			<div class="logo"><img src="http://placehold.it/130x60"></div>
		</div>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<header>
				<?php the_post_thumbnail( 'wpbs-featured' ); ?>
				<!-- ShareThis plugin -->
				<div class="social share-this">
					<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span st_via='something' st_username='something' class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				</div><!-- end .social.share-this -->
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
		<div class="other-articles">
			<?php previous_post('&laquo; %', '', 'yes'); ?>
			| <?php next_post('% &raquo; ', '', 'yes'); ?>
		</div><!-- end .other-articles -->
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

<!-- ShareThis JS -->
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"c39b97a4-66f9-4d1a-ae38-2e50543af700","doNotCopy":false,"hashAddressBar":true,"doNotHash":false});var st_type="wordpress3.9.1";</script>
<!-- end ShareThis JS -->

<?php get_footer(); ?>