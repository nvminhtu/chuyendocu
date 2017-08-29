<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->


	<div id="footer-phone" class="sticky-note">
		<a href="tel:0907875974" class="phone-detect"><span class="glyphicon glyphicon-phone">0907875974</span></a>
	<!-- #footer-phone --></div>

	<div id="footer-top">
		<div class="container">
			<div class="row">
				<?php //echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
				<p class="slogan_footer"><?php _e('UY TÍN, CHẤT LƯỢNG ĐỪNG HAM RẺ, HÃY MUA HÀNG CHẤT LƯỢNG'); ?></p>
				<?php wp_tag_cloud( 'format=list&orderby=count&order=DESC' ); ?>
			</div>
		</div>
	</div>

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
			<div class="row">
				<p>Giấy phép kinh doanh số 0313582229 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 17/12/2015 –  Giám đốc Đào Nguyễn Khánh Huy</p>
				<p>Địa Chỉ: 108/7 Đường số 1, P. 16, Q. Gò Vấp, Tp. HCM</p>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php sparkling_social(); ?>
					<nav role="navigation" class="col-md-6">
						<?php sparkling_footer_links(); ?>
					</nav>
					<div class="copyright col-md-6">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
