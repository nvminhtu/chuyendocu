<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="top-page content-area grid-area">
		<main id="main" class="site-main" role="main">
			<article <?php post_class(); ?>>
				<?php 
					$args = array( 'orderby' => 'menu-order', 'order' => 'DESC', 'hide_empty' => true);
					$terms = get_terms("hang",$args);
					
					$count = count($terms);
					 if ( $count > 0 ){
						foreach ( $terms as $term ) {
						 ?>
							<div class="blog-item-wrap">
								<a class="title_heading" href="/laptop/hang/<?php echo $term->slug; ?>"><h3><?php echo $term->name; ?></h3></a>
								<div class="post-inner-content">
									<div class="product_carousel row">
									<?php
										global $wp_rewrite;
										global $paged;
										if ( get_query_var('paged') ) $paged = get_query_var('paged');  
										if ( get_query_var('page') ) $paged = get_query_var('page');
										$posts_per_page = get_option("posts_per_page"); 
										$query = new WP_Query( 
											array( 'post_type' => 'laptop',
													'hang' => $term->slug,
			        							 	'posts_per_page'=> -1
													) );
										$num_posts = $query->post_count;
										if ( $query->have_posts() ) : $order = 0; ?>
											<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
												<?php get_template_part( 'content', 'san-pham' );  ?>
											<?php endwhile; ?><?php wp_reset_postdata(); ?>
											<!-- show pagination here -->
										<?php else : ?>
											<!-- show 404 error here -->
										<?php endif; ?>
										<!-- #.row --></div>
						<div class="row"><div class="pull-right"><a class="btn btn-danger btn-sm" href="/laptop/hang/<?php echo $term->slug; ?>" target="_blank"><i class="fa fa-arrow-right"></i> Xem laptop <?php echo $term->name; ?> đầy đủ</a></div></div>
					</div>
				</div>
				<?php }
						}
				?>
				<div class="blog-item-wrap">
					<h3 class="linh-kien">Linh kiện</h3>
					<div class="post-inner-content">
						<div class="product_carousel row">
						<?php
							global $wp_rewrite;
							global $paged;
							if ( get_query_var('paged') ) $paged = get_query_var('paged');  
							if ( get_query_var('page') ) $paged = get_query_var('page');
							$posts_per_page = get_option("posts_per_page"); 
							$query = new WP_Query( 
								array( 'post_type' => 'linh-kien',
        							 'posts_per_page'=> -1
										) );
							$num_posts = $query->post_count;
							if ( $query->have_posts() ) : $order = 0; ?>
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
									<?php get_template_part( 'content', 'linh-kien' );  ?>
								<?php endwhile; ?><?php wp_reset_postdata(); ?>
								<!-- show pagination here -->
							<?php else : ?>
								<!-- show 404 error here -->
							<?php endif; ?>
							<!-- #.row --></div>
						<div class="row"><div class="pull-right"><a class="btn btn-danger btn-sm" href="/linh-kien/" target="_blank"><i class="fa fa-arrow-right"></i> Xem linh kiện đầy đủ</a></div></div>
					</div>
				</div>
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>