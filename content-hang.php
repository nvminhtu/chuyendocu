<?php
/**
 * @package sparkling-load san-pham
 */
?>
<div class="product-detail col-md-4 col-xs-4 col-sm-4">
	<div class="content_box">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<!-- <span><?php the_title(); ?></span> -->
			<div class="img-item">
	  		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
	  	<!-- /.img-item --></div>
			<div class="item-info">
				<span class="item-title"><?php the_title(); ?><!-- /.item-title --></span>
				<?php
							$price = get_post_meta($post->ID, 'Gia', true);
							$tinhtrang = get_post_meta($post->ID, 'Tinhtrang', true);
				 ?>
	  		<span class="item-price">
	  			<?php
						if($price=="")
							echo '<span class="btn btn-success btn-sm " target="_blank"><i class="glyphicon glyphicon-phone"></i> Giá Liên hệ</span>';
						 else
						   echo  $price." VND"; ?> </span>

	  		<!-- /.item-price --></span>
	  		<span class="item-status">
				<?php
					if(isset($tinhtrang)&&$tinhtrang!="")
						 echo strip_tags($tinhtrang);
					else
						 echo '';
				?>
				</span>
	  		<a class="btn btn-info btn " target="_blank"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
	  	<!-- /.item-info --></div>
		</a>
	<!-- /.content_box --></div>
<!-- /.product-detai --></div>
