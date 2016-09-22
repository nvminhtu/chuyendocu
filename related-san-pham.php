<?php
/**
 * @package sparkling
 */
?>

<?php 
 	$custom_taxterms = wp_get_object_terms( $post->ID, 'hang', array('fields' => 'ids') );
	// arguments
	$args = array(
		'post_type' => 'laptop',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'rand',
		'tax_query' => array(
	    array(
	      'taxonomy' => 'hang',
	      'field' => 'id',
	      'terms' => $custom_taxterms
	    )
		),
		'post__not_in' => array ($post->ID),
	);
$related_items = new WP_Query( $args );
// loop over query
?>

<?php if ($related_items->have_posts()) : ?>
<h4 class="related-head"><?php 
	$i = 0;
	_e('Sản phẩm liên quan'); 
?></h4>
		<?php	while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
<?php if($i%3==0) {  ?>
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
				  		<span class="item-price">
				  			<?php 
									$price = get_post_meta($post->ID, 'Gia', true);
									if($price=="") 
										echo '<span class="btn btn-success btn-sm " target="_blank"><i class="glyphicon glyphicon-phone"></i> Giá Liên hệ</span>';
									 else
									   echo  $price." VND"; ?> </span>
								
				  		<!-- /.item-price --></span>
				  		<a class="btn btn-info btn " target="_blank"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
				  	<!-- /.item-info --></div>
					</a>
				<!-- /.content_box --></div>
			<!-- /.col-md-4 --></div>	
			<?php $i++; if($i%3==0) { ?>
	</div>
<!-- /.product-detail --></div>  
<?php } ?>  
		<?php
			endwhile;
			endif;
			// Reset Post Data
			wp_reset_postdata();
		?>
 
 
