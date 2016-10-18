<?php
/**
 * @package sparkling-load san-pham
 */
?>
<div class="product-detail col-md-12 col-xs-12 col-sm-12">

			<div class="content_box">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="img-item">
			  		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
			  	<!-- /.img-item --></div>
			  </a>
		  	<div class="mouse_box">
		  		<div class="panel panel-success ">
						<div class="panel-heading">Cấu hình</div>
						<div class="panel-body">
				  		<?php
				  			echo $cauhinh = get_post_meta($post->ID, 'cauhinh', true);
							?>
						</div>
					</div>
					<span class="overlay"></span>
				</div>
				<div class="item-info">
					<?php
								$price = get_post_meta($post->ID, 'Gia', true);
								$tinhtrang = get_post_meta($post->ID, 'Tinhtrang', true);
					 ?>
					<span class="item-title"><?php the_title(); ?><!-- /.item-title --></span>
					<span class="item-status">
					<?php
						if(isset($tinhtrang)&&$tinhtrang!="")
						   echo strip_tags($tinhtrang);
						else
						   echo '';
					?>
					</span>
		  		<span class="item-price">
		  		<?php
						if(isset($price)&&$price!="")
						   echo  $price." VND";
						else
						   echo '<span class="btn btn-success btn-sm " target="_blank"><i class="glyphicon glyphicon-phone"></i> Giá Liên hệ</span>';

						echo '<br />';
						?>
						<!-- /.item-price --></span>

		  		<a class="btn btn-info btn btn-sm" href="<?php the_permalink(); ?>" target="_blank"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
		  	<!-- /.item-info --></div>
		<!-- /.content_box --></div>
<!-- /.product-detai --></div>
