<?php
/**
 * @package sparkling-load san-pham
 */
?>
<div class="product-detail col-md-6 col-xs-6 col-sm-6">
	<div class="content_box">
		
		<div class="row">
			<div class="col-md-4 col-xs-4 col-sm-4">
				<div class="img-item">
		  			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'laptop-thumb', array( 'class' => 'single-featured' )); ?></a>
		  		<!-- /.img-item --></div>
			</div>
			<div class="col-md-8 col-xs-8 col-sm-8">
				<div class=" content-dichvu">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="item-title"><?php the_title(); ?><!-- /.item-title --></span></a>
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
		
	<!-- /.content_box --></div>
<!-- /.product-detai --></div>