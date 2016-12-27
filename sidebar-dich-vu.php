<?php
/**
 * The Sidebar for Dich vu articles
 *
 * @package sparkling
 */
?>
</div>
	<div id="secondary" class="widget-area col-sm-12 col-md-3" role="complementary">
		<div class="well">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-dich-vu' ) ) : ?>
			<?php endif; // end sidebar widget area ?>

			<ul>
				<?php 
				$posts_per_page = get_option("posts_per_page"); 
				$query = new WP_Query( 
						array( 'post_type' => 'dich-vu',
							 	'posts_per_page'=> $posts_per_page
							) );
			
				if ( $query->have_posts() ) : $order = 0; ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						
					<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<li>
					<div class="img-item">
			  			<?php //the_post_thumbnail( 'laptop-thumb', array( 'class' => 'single-featured' )); ?>
			  		<!-- /.img-item --></div>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			</ul>
		</div>
		
	</div><!-- #secondary -->
