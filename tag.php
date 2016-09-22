<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php $tag_slug = get_query_var('tag'); ?>
<div id="primary" class="content-area grid-area">
	<main id="main" class="site-main" role="main">
		<article <?php post_class(); ?>>
			<div class="blog-item-wrap">
				<h3><?php printf( __( 'Tag: %s', '' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h3>
				<div class="post-inner-content">
					<?php
						$args = array(
								'post_type' => 'laptop',
								'tag' => $tag_slug
							);
					 	$the_query = new WP_Query( $args );
						$num_posts = $the_query->post_count;
						if ( $the_query->have_posts() ) : $order = 0; ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<?php if($order%3==0) { ?><div class="row"><?php } ?>
								<?php get_template_part( 'content', 'hang' );  ?>
								<?php if(($order+1)%3==0 || $order==($num_posts-1)) { ?></div><?php } $order++; ?>
							<?php endwhile; ?><?php wp_reset_postdata(); ?>
							<div class="row navigation"><?php wp_pagenavi(); ?></div>
						<?php else : ?>
							<!-- show 404 error here -->
						<?php endif;
						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</article><!-- #post-## -->
	</main><!-- #main -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
