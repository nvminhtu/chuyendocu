<?php
/**
 * @package sparkling-load san-pham
 */
?>
<div class="news col-md-12">
	<div class="post-inner-content">
		<div class="col-md-4 col-xs-4 col-sm-4">
			<div class="content_box">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<!-- <span><?php the_title(); ?></span> -->
					<div class="img-item">
			  		<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
			  	<!-- /.img-item --></div>
					</a>
			<!-- /.content_box --></div>
			</div>
			<div class="col-md-8 col-xs-8 col-sm-8">
				<div class="item-info">
					<h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!-- /.item-title --></h3>
					<?php the_excerpt(); ?>
					<a class="btn btn-info btn" href="<?php the_permalink(); ?>">Xem chi tiết</a>
				<!-- /.item-info --></div>
			</div>
		</div>
<!-- /.product-detai --></div>