<?php
/**
 * @package sparkling
 */
?>
<?php
				$args=array(
					'order' =>DESC,
					'orderby' => rand,
					'posts_per_page'=> -1,
					'caller_get_posts'=>1
				);
			$my_query = null;
			$my_query = new WP_Query($args);
			$num_post = $my_query->post_count;

			if( $my_query->have_posts() ) {
				$j = 0;
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php if($j%3==0) {  ?>
					<div class="related-news col-md-12 col-xs-12 col-sm-12">
						<div class="row">
					 <?php } ?>
								<div class="col-md-4">
									<div class="content_box">
										<a href="<?php the_permalink(); ?>" rel="bookmark">
											<div class="img-item">
									  		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
									  	<!-- /.img-item --></div>
									  	<?php  ?>
									  	<div class="mouse_box">
									  		<?php 
									  			echo $cauhinh = get_post_meta($post->ID, 'cauhinh', true); 
												?>
												<span class="overlay"></span>
											</div> 
											<div class="item-info">
												<span class="item-title"><?php the_title(); ?><!-- /.item-title --></span>
									  	<!-- /.item-info --></div>
										</a>
									<!-- /.content_box --></div>
								<!-- /.col-md-4 --></div>	
								<?php $j++; if($j%3==0||$j==$num_post) { ?>
						</div>
					<!-- /.product-detail --></div>  
					<?php } ?>
		 <?php
				endwhile; } wp_reset_query(); 
?>