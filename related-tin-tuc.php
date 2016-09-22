<?php
/**
 * @package sparkling
 */
?>

<h4 class="related-head"><?php 
			$i = 0;
			_e('Tin liên quan'); 
		?></h4>
<?php 
 	$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );

		if ( is_single()) {
			$categories = get_the_category();
		if ($categories) {
			foreach ($categories as $category) {
				$cat = $category->cat_ID;
				$args=array(
					'cat' => $cat,
					'order' =>DESC,
					'orderby' => rand,
					'post__not_in' => array($post->ID),
					'posts_per_page'=>9999,
					'caller_get_posts'=>1
				);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php if($i%4==0) {  ?>
					<div class="related-product col-md-12 col-xs-12 col-sm-12">
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
									  		<a class="btn btn-info btn " target="_blank"><i class="fa"></i>Xem chi tiết</a>
									  	<!-- /.item-info --></div>
										</a>
									<!-- /.content_box --></div>
								<!-- /.col-md-4 --></div>	
								<?php $i++; if($i%4==0) { ?>
						</div>
					<!-- /.product-detail --></div>  
					<?php } ?>
		 <?php
				endwhile; }}} wp_reset_query(); }
	

?>
		

 
 
