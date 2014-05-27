<?php get_header(); ?>
<div class="top-content" id="top-content">
	<div class="close-bar">
		<a class="close-button" id="close-button" href="#">Close [X]</a>
	</div>
	<section class="blog-intro">
		<h1 class="blog-intro-logo">The ABCD Institute</h1>
		<aside class="blog-intro-description">Duis et bibendum nulla. Ut at arcu sapien. Nulla accumsan malesuada faucibus. Sed ut dui vel nisl adipiscing faucibus ac vitae purus. Etiam porta sapien non ante egestas ultrices. Sed sed bibendum odio. In ut neque tellus. Etiam est lacus, semper id imperdiet sed, tincidunt bibendum est.Suspendisse arcu justo, mattis a dignissim vel, malesuada id nisl.</aside>
	</section>
</div><!-- end .top-content -->
<section class="latest-post">
	<?php
		$args = array( 'posts_per_page' => 6);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(1170,770 ), false, '' );
		?>
		<article style="background-image: url(<?php echo $src[0]; ?> );">
			<div class="darken"></div>
			<div class="article-info">
				<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<section class="article-excerpt"><?php the_excerpt(); ?></section>
				<a href="<?php the_permalink(); ?>" class="article-readmore btn btn-hallow btn-hallow-white" title="<?php the_title(); ?>">Read more</a>
			</div><!-- end .article-info -->
		</article>
		<?php endforeach; 
			wp_reset_postdata();
	?>
	<?php global $post; ?>
</section>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/library/js/vendor/min/blog-index-ck.js">


<?php get_footer(); ?>