<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title><?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );
			?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="Sharp Machine Media">
	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
    	<!-- Le styles -->
    	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    	<link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
    	<!--[if lte IE 8]>
    		<link href="<?php bloginfo('template_directory'); ?>/css/ie7.css" rel="stylesheet">
    	<![endif]-->
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- Le favicon -->
    	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
	
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<div class="row">
					<div class="span5">
						<img src="<?php bloginfo('template_directory') ?>/img/logo-symbol.png" alt="Logo" class="logo-symbol">
						<h1 class="site-title"><?php bloginfo('title'); ?></h1>
						<!-- <p>The marketing world has experienced a fundamental shift.<br> Welcome to <span class="white">ralphplumb.com</span>, stay <br>up-to-date with my posts and all things internet marketing</p> -->
						<p><?php the_field('intro_copy', 'options'); ?></p>
					</div>
					<div class="span6" id="slideshow">
				
							<a href="<?php bloginfo('template_directory') ?>/img/ph.jpg" rel="lightbox">
								<img src="<?php bloginfo('template_directory') ?>/img/ph.jpg" alt="">
							</a>
							
							<div class="hover-bar">
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox">
									<img src="<?php bloginfo("template_directory") ?>/img/branson.jpg" alt=""></a>
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox" title="Click bar to open picture" class="bar"></a>
							</div>
							<div class="hover-bar">
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox">
									<img src="<?php bloginfo("template_directory") ?>/img/branson.jpg" alt=""></a>
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox" title="Click bar to open picture" class="bar"></a>
							</div>
							<div class="hover-bar">
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox">
									<img src="<?php bloginfo("template_directory") ?>/img/branson.jpg" alt=""></a>
								<a href="<?php bloginfo("template_directory") ?>/img/branson.jpg" rel="lightbox" title="Click bar to open picture" class="bar"></a>
							</div>
						
					</div>
				</div>
			</div>
		</header>
	  <div class="container">