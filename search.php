<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area grid-area">
		<main id="main" class="site-main" role="main">
		<article <?php post_class(); ?>>
				<div class="blog-item-wrap">
					<h3><?php printf( esc_html__( 'Kết quả tìm kiếm: %s', 'sparkling' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					<div class="post-inner-content">
						<?php if ( have_posts() ) : $order = 0; ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<?php if($order%3==0) { ?><div class="row"><?php } ?>
						<?php get_template_part( 'content', 'hang' );  ?>
						<?php if(($order+1)%3==0 || $order==($num_posts-1)) { ?></div><?php } $order++; ?>
						<?php endwhile; ?>
							<?php sparkling_paging_nav(); ?>
						<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
