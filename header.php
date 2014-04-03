<!doctype html>
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<?php wp_head(); ?>

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/gumby.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/store.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/forum.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/events.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Condiment|Alegreya+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/mobilenav/mobile-nav.css" />

	<script src="<?php bloginfo('template_url'); ?>/assets/bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/carousel/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/carousel/css/easing.css">
    
    <!-- Owl Carousel Assets -->
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/owl-carousel/assets/css/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/owl-carousel/assets/css/owl.theme.css">


	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/elastislide/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/elastislide/css/custom.css" />
	<script src="<?php bloginfo('template_url'); ?>/assets/elastislide/js/modernizr.custom.17475.js"></script>

</head>
<body>
<header>
	<div class="top-nav">
		<div class="row">
	      	<div class="navbar push_six eight columns" id="nav1">
				<!-- Toggle for mobile navigation, targeting the <ul> -->
				<?php wp_nav_menu( array('theme_location' => 'top-menu')); ?>
			</div>
		    <div class="six columns">
		      	<div class="two columns">
		      		<a href="#" class="toggle" gumby-trigger="#something"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/search.png" alt=""></a>
		      		<div id="something"><input type="text"></div>
		      	</div>
		      	<div class="eighteen columns">Call Today!  1-800-604-6741</div>
		    </div>
		</div><!-- End .row -->
	</div><!-- End .top-nav -->
	<div class="main-nav">
		<div class="row">
			<div class="six columns">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt=""></a>
			</div>
			<div class="navbar fourteen columns" id="nav2">
			 	<!-- Toggle for mobile navigation, targeting the <ul> -->
				<?php

					$defaults = array(
						'theme_location'  => 'main-menu',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="twenty columns">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);

					wp_nav_menu( $defaults );

				?>

			</div>
		</div>
	</div>
</header><!-- End header -->
<?php if(!is_front_page()) { ?>
<section class="page-title">
	<div class="row">
		<?php if ( is_post_type_archive('faqs') ) { ?>
		<h1 itemprop="name">FAQs</h1>
		<?php } ?>
		<?php if ( is_post_type_archive('tribe_events') ) { ?>
		<h1 itemprop="name">Events</h1>
		<?php } ?>
		<?php if ( is_post_type_archive('forum') ) { ?>
		<h1 itemprop="name">Forum</h1>
		<?php } ?>
		<?php if ( is_post_type_archive('instructors') ) { ?>
		<h1 itemprop="name">Instructors</h1>
		<?php } ?>
		<?php if ( is_post_type_archive('testimonials') ) { ?>
		<h1 itemprop="name">Testimonials</h1>
		<?php } ?>
		<?php if ( is_single() ) { ?>
		<h1 itemprop="name"><?php echo tribe_get_events_title() ?></h1>
		<?php } ?>
		<?php if(is_page()) { ?>
		<h1 itemprop="name"><?php the_title(); ?></h1>
		<?php } ?>
	</div>
</section><!-- End .page-title -->
<section class="breadcrumb">
	<div class="row">
		<ul>
			<li><a href="#">Home</a> > </li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
</section><!-- End .breadcrumb -->
<?php } ?>