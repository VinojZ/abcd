<?php get_header(); ?>
<section class="intro">
	<h1>The ABCD Institute</h1>
	<aside>Duis et bibendum nulla. Ut at arcu sapien. Nulla accumsan malesuada faucibus. Sed ut dui vel nisl adipiscing faucibus ac vitae purus. Etiam porta sapien non ante egestas ultrices. Sed sed bibendum odio. In ut neque tellus. Etiam est lacus, semper id imperdiet sed, tincidunt bibendum est.Suspendisse arcu justo, mattis a dignissim vel, malesuada id nisl.</aside>
</section>
<section class="latest-post">
	<?php
		$args = array( 'posts_per_page' => 1);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(1170,770 ), false, '' );
		?>
		<article style="background-image: url(<?php echo $src[0]; ?> );">
			<div class="darken"></div>
			<div class="article-info">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="read-more" title="<?php the_title(); ?>">Read more</a>
			</div><!-- end .article-info -->
		</article>
		<?php endforeach; 
			wp_reset_postdata();
	?>
	<?php global $post; ?>
</section>
<section class="more-reading">
	<?php
		$args = array( 'posts_per_page' => 6, 'offset'=> 2);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(390,390 ), false, '' );
		?>
			<article style="background-image: url(<?php echo $src[0]; ?> );">
				<div class="darken"></div>
				<div class="article-info">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="read-more" title="<?php the_title(); ?>">Read more</a>
				</div><!-- end .article-info -->
			</article>	
		<?php endforeach; 
			wp_reset_postdata();
	?>
</section>
<?php get_footer(); ?>