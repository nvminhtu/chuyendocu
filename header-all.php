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
		 	  			</div>
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
			 	
