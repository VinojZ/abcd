<?php get_header(); ?>
			

<main class="main-content">


	<?php if (have_posts()) : while (have_posts()) : the_post(); $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<div class="breadcrumbs">
			<a href="#" class="crumb-home">ABCD Institute</a>
			<a href="<?php the_permalink(); ?>" class="current-article"><?php the_title(); ?></a>
		</div>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<header>

				<div class="post-image" style="background-image: url(<?php echo $featuredImage; ?>);">
					
				</div>

				<!-- ShareThis plugin -->
				<div class="social share-this">
					<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span st_via='something' st_username='something' class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
				</div><!-- end .social.share-this -->

				<div class="page-header">
					<h1 class="post-title" itemprop="headline">
						<?php the_title(); ?>
					</h1>
					<p class="post-author">
						By <?php the_author(); ?> 
					</p>
				</div>
			</header> <!-- end article header -->

			<section class="post-content clearfix" itemprop="articleBody">
				
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

		
		<div class="post-comments">

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

	<section class="get-started" id="get-started">
		<div class="call-to-action call-to-action-solo">
			<h5>Lorem ipsum dolor sit</h5>
			<h6>Quisque ornare arcu venenatis felis condimentum</h6>
			<a class="btn btn-blue" href="#">Call to Action</a>
		</div><!-- end .cta -->
	</section><!-- end .get-started -->

</main><!-- end .main-content -->

<!-- ShareThis JS -->
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"c39b97a4-66f9-4d1a-ae38-2e50543af700","doNotCopy":false,"hashAddressBar":true,"doNotHash":false});var st_type="wordpress3.9.1";</script>
<!-- end ShareThis JS -->

<?php get_footer(); ?>