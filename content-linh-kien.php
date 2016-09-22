<?php
/**
 * @package sparkling load linh kiện ra
 */
?>
<div class="product-detail col-md-12 col-xs-12 col-sm-12">
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
						   echo  $price." VND"; ?> </span><br />
					
	  		<!-- /.item-price --></span>
	  		<a class="btn btn-info btn" href="<?php the_permalink(); ?>" target="_blank"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
	  	<!-- /.item-info --></div>
		</a>
	<!-- /.content_box --></div>
<!-- /.product-detai --></div>