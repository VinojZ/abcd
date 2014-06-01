<?php get_header(); ?>
			

<main class="main-content">

	<div class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<div class="breadcrumbs">
			<a href="/the-abcd-institute" class="crumb-home">ABCD Institute</a>
			<a href="<?php the_permalink(); ?>" class="current-article"><?php the_title(); ?></a>
		</div>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<header>

				<div class="post-image" style="background-image: url(<?php echo $featuredImage; ?>);">
					
				</div>

				<div class="page-header">
					<h1 class="post-title" itemprop="headline">
						<?php the_title(); ?>
					</h1>
					<p class="post-author">
						By <?php the_author(); ?> 
					</p>

					<!-- ShareThis plugin -->
					<div class="article-share">
						<span st_via='@theabcdcompany' st_username='@theabcdcompany' class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						<span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_linkedin_large'></span>
						<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_email_large'></span>
					</div>
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

			<section class="get-started get-started-blog" id="get-started">
				<div class="call-to-action call-to-action-solo">
					<div class="get-started-copy">
						<h5>Get started with ABCD today.</h5>
						<h6>Your pathway to success begins here.</h6>
					</div>
					<div class="get-started-cta">
						<a class="btn btn-red" href="#">Call to Action</a>
					</div>
				</div><!-- end .cta -->
			</section><!-- end .get-started -->

		</article> <!-- end article -->

	</div>

</main><!-- end .main-content -->

<div class="post-comments">
	<div class="container">
		<div class="comments">
			<?php comments_template(); ?>
		</div>
	</div>

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

<!-- ShareThis JS -->
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"c39b97a4-66f9-4d1a-ae38-2e50543af700","doNotCopy":false,"hashAddressBar":true,"doNotHash":false});var st_type="wordpress3.9.1";</script>
<!-- end ShareThis JS -->

<?php get_footer(); ?>