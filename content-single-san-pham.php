<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title "><?php the_title(); ?></h1>
	<div class="post-inner-content">
		<header class="entry-header page-header">
			<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
		</header><!-- .entry-header -->
		<div class="row ">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				
				<ul class="list-group ">
				    <li class="list-group-item">
					  	<h3><?php
							$price = get_post_meta($post->ID, 'Gia', true);
							if($price=="")
								echo '<span class="btn btn-success btn-sm " target="_blank"><i class="glyphicon glyphicon-phone"></i> Giá Liên hệ</span>';
							 else
							   echo  $price." VND"; ?>
						</h3>
					</li>
					<li class="list-group-item"><span class="btn btn-info btn-sm"><?php
		  			$conhang = get_post_meta($post->ID, 'conhang', true);
		  			if($conhang=='true') {
		  				echo 'Còn hàng';
		  			} else {
		  				echo 'Hết hàng';
		  			}
					?></span></li>
					<li class="list-group-item"><i class="fa fa-tags"></i> <strong>Dòng máy:</strong> <?php the_title(); ?></li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				
				<ul class="list-group ">
				   <li class="list-group-item"><i class="fa fa-tags"></i><strong>Tình trạng:</strong> <span class="btn btn-warning btn-sm"><?php echo $tinhtrang = get_post_meta($post->ID, 'Tinhtrang', true);  ?></span></li>
				</ul>
				<div class="alert alert-info ">Gọi cho chúng tôi <br />Điện thoại: <span class="btn btn-success btn">08.8898.3595</span>&nbsp;&nbsp;&nbsp;Mr Huy: <span class="btn btn-danger btn">0907.875.974</span></div>
			</div>
		</div>
		
		<?php
		  global $post;
			$link = get_permalink($post->ID);
		?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">'.esc_html__( 'Pages:', 'sparkling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1
	       		) );
	    	?>
	    	<?php the_tags(); ?>
		<!-- .entry-content --></div>
		<div class="tab-detail">
			<ul id="oscitas-tabs-0" class="nav nav-tabs">
				<li class="active"><a class="" href="#pane-0-0" data-toggle="tab" aria-expanded="false">Cấu hình</a></li>
				<li class=""><a class="" href="#pane-0-1" data-toggle="tab" aria-expanded="false">Hỗ trợ</a></li>
				<li class=""><a class="" href="#pane-0-2" data-toggle="tab" aria-expanded="false">Bài viết liên quan</a></li>
			</ul>

			<div class="tab-content">
				<div id="pane-0-0" class="tab-pane active">
					<?php
		  			echo $cauhinh = get_post_meta($post->ID, 'cauhinh', true);
					?>
				</div>

				<div id="pane-0-1" class="tab-pane">
					<ul>
						<li>Hotline: 0918.375.974</li>
						<li>Mr. Huy: 0907.875.974</li>
						<li>Mr Hiếu: 0984530441</li>
					</ul>
				</div>

				<div id="pane-0-2" class="tab-pane">
					<?php get_template_part( 'concerned', 'tin-tuc' ); ?>
				</div>

			</div>
		</div>

		<footer class="entry-meta">

				<?php sparkling_posted_on(); ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( esc_html__( ', ', 'sparkling' ) );
					if ( $categories_list && sparkling_categorized_blog() ) :
				?>
				<span class="cat-links"><i class="fa fa-folder-open-o"></i>
					<?php printf( esc_html__( ' %1$s', 'sparkling' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>
				<?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>

	    	<?php if(has_tag()) : ?>
	      <!-- tags -->
	      <div class="tagcloud">

	          <?php
	              $tags = get_the_tags(get_the_ID());
	              foreach($tags as $tag){
	                  echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
	              } ?>

	      </div>
	      <!-- end tags -->
	      <?php endif; ?>

		</footer><!-- .entry-meta -->
	</div>

	<?php if (get_the_author_meta('description')) :  ?>
		<div class="post-inner-content secondary-content-box">
      <!-- author bio -->
      <div class="author-bio content-box-inner">

        <!-- avatar -->
        <div class="avatar">
            <?php echo get_avatar(get_the_author_meta('ID') , '60'); ?>
        </div>
        <!-- end avatar -->

        <!-- user bio -->
        <div class="author-bio-content">

          <h4 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h4>
          <p class="author-description">
              <?php echo get_the_author_meta('description'); ?>
          </p>

        </div><!-- end .author-bio-content -->

      </div><!-- end .author-bio  -->

		</div>
		<?php endif; ?>
		<?php  get_template_part( 'related', 'san-pham' ); ?>
</article><!-- #post-## -->
