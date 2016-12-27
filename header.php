<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-cdc.ico" />
<?php wp_head(); ?>
<script type='text/javascript' src='http://www.chuyendocu.net/wp-content/themes/rgbstore/js/jquery.mousewheel.js?ver=3.5'></script>
</head>

<body <?php body_class(); ?>>
<div class="loader"></div>
<div id="page" class="hfeed site">
	<div id="top-menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-left">
				<ul class="list-inline">
				  <li><i class="fa fa-phone"></i>Hotline : <span class="blue-big">0907875974</span></li>
				  <li><i class="fa fa-user"></i><span>Huy</span>  <a href="vitinhthongnhat2011@yahoo.com">vitinhthongnhat2011@yahoo.com</a></li>
				  <li><i class="fa fa-clock-o"></i>Thời gian làm việc : <span class="green-medium">từ 8:00 đến 20:00 (tất cả các ngày trong tuần)</span></li>
				</ul>
			</div>
			<div class="navbar-right">
				<?php sparkling_social(); ?>
			<!-- /.navbar-right --></div>
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
	 	<div class="top-header">
	 	  <div class="container">
		 	  	<div class="row">
		 	  		<div id="logo" class="col-md-3 col-xs-12 col-sm-12">
					 		<div id="logo_des">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logo-cdc.png" alt="<?php bloginfo( 'name' ); ?>"/></a>
								<p><strong><?php bloginfo('description'); ?></strong></p>
							</div>
		 	  		</div>
		 	  		<div id="location" class="col-md-9 col-xs-12 col-sm-12">
		 	  			<div class="inner-content">
								<?php dynamic_sidebar( 'top-header' ); ?>
		 	  				<!-- <p><span class="glyphicon glyphicon-home"></span><span>&nbsp;Địa chỉ:</span> 432 Lê Văn Thọ , p.16, quận Gò Vấp, Tp HCM &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone"></span><span>&nbsp;Hotline:</span> 0907.875.974<br /></p>
							<p><span class="glyphicon glyphicon-time"></span><span>&nbsp;Làm việc:</span> 8h30 - 20h30, CN: 8h30 - 17h30</p> -->
		 	  			<!-- /.inner-content --></div>
		 	  		</div>
				</div>
			</div>
	 	</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header col-sm-4">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>

						<div class="col-sm-12">
							<?php sparkling_header_menu(); // main navigation ?>
						<!-- /.col-sm-12 --></div>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="slide_intro" class="container">
			<div id="top_intro" class="col-sm-12">
				<?php if(is_front_page()||is_home()) { ?>
				<div class="col-sm-8">
					<?php sparkling_featured_slider(); ?>
				<!-- /.col-sm-8 --></div>

				<div class="col-sm-4">
					<div class="latest-news">
						<ul id="oscitas-tabs-0" class="nav nav-tabs">
							<li class="active"><a class="" href="#pane-0-0" data-toggle="tab" aria-expanded="false">Tin tức</a></li>
							<li class=""><a class="" href="#pane-0-1" data-toggle="tab" aria-expanded="false">Hướng dẫn sử dụng</a></li>
						</ul>
						<div class="tab-content">
							<div id="pane-0-0" class="tab-pane active">
								<?php if ( ! dynamic_sidebar( 'home-widget-1' ) ) : ?>
									<p>Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất</p>
								<?php endif; ?>
							</div>
							<div id="pane-0-1" class="tab-pane">
								<?php if ( ! dynamic_sidebar( 'home-widget-2' ) ) : ?>
								<p>Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất Tin tức mới nhất</p>
								<?php endif; ?>
							</div>

						</div>
					</div>
				<!-- /.col-sm-4 --></div>
				<?php } ?>
			</div>
			<?php if(is_front_page()||is_home()) { ?>
				<?php get_template_part( 'top', 'san-pham' );  ?>
			<?php } else { ?>
				<div class="top-breadcrumb col-sm-12">
				<?php
						if(function_exists('bcn_display'))
			    	{
			        bcn_display();
			    	}
	    	?>
	    	</div>
			<?php } ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
