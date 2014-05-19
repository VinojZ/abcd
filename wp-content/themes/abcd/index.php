<?php get_header(); ?>	
<section class="intro">
	<h1>The ABCD Institute</h1>
	<aside>Duis et bibendum nulla. Ut at arcu sapien. Nulla accumsan malesuada faucibus. Sed ut dui vel nisl adipiscing faucibus ac vitae purus. Etiam porta sapien non ante egestas ultrices. Sed sed bibendum odio. In ut neque tellus. Etiam est lacus, semper id imperdiet sed, tincidunt bibendum est.Suspendisse arcu justo, mattis a dignissim vel, malesuada id nisl.</aside>
</section>
<section class="latest-post">
	<article>
		<?php
			$args = array( 'posts_per_page' => 1);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<p><?php the_excerpt(); ?></p>
			<?php endforeach; 
				wp_reset_postdata();
		?>
	</article>
</section>
<section class="more-reading">
	<ul>
		<?php
			$args = array( 'posts_per_page' => 5, 'offset'=> 2);
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>">Read more</a>
			</li>
			<?php endforeach; 
				wp_reset_postdata();
		?>
	</ul>
</section>
<?php get_footer(); ?>