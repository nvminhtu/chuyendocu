<div id="special_park" class="col-sm-12">
				<div id="head_product" class="grid-area">
					<h3><?php _e("Sản phẩm nổi bật"); ?></h3>
				  <div class="post-inner-content">
				  	<div class="row">
				  		<div class="top_carousel product-detail col-md-12 col-xs-12 col-sm-12">

								<?php

								// args
								$args = array(
									'numberposts'	=> -1,
									'post_type'		=> 'laptop',
									'meta_key'		=> 'noibat',
									'meta_value'	=> 'true'
								);


								// query
								$the_query = new WP_Query( $args );

								?>
								<?php if( $the_query->have_posts() ): ?>

									<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<div class="content_box">
									  	<a href="<?php the_permalink(); ?>">
										  	<div class="img-item">
										  		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
										  	<!-- /.img-item --></div>
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
													<span class="item-title"><?php the_title(); ?><!-- /.item-title --></span>
													<?php
														$price = get_post_meta($post->ID, 'Gia', true);
														$tinhtrang = get_post_meta($post->ID, 'Tinhtrang', true);
													?>
													<span class="item-status">
													<?php
														if(isset($tinhtrang)&&$tinhtrang!="")
															 echo strip_tags($tinhtrang);
														else
															 echo '';
													?>
													</span>
										  		<span class="item-price">
														<?php	if(isset($price)&&$price!="")
															   echo  $price." VND";
															else
															   echo '<span class="btn btn-success btn-sm " target="_blank"><i class="glyphicon glyphicon-phone"></i> Giá Liên hệ</span>';

															echo '<br />';
															?>
													<!-- /.item-price --></span>

										  	<a class="btn btn-info btn" href="<?php the_permalink(); ?>" target="_blank"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
										  	<!-- /.item-info --></div>
										  </a>
											<!-- /.content_box --></div>

									<?php endwhile; ?>

								<?php endif; ?>

				  		<!-- /.product-detail --></div>

				  	<!-- /.row --></div>
				  <!-- /.post-inner-content --></div>
				<!-- /#head_product --></div>
			<!-- /#special_park --></div>
