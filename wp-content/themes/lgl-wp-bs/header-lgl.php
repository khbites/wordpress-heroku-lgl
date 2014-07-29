<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
			
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- theme options from options panel -->
	<?php get_wpbs_theme_options(); ?>

	<!-- typeahead plugin - if top nav search bar enabled -->
	<?php require_once(get_template_directory() . '/library/typeahead.php'); ?>
			
	 <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php  bloginfo('rss2_url') ?>">
</head>

<body <?php body_class(); ?>>
				
<div class="container">

<header role="banner">
<div class="row-fluid masthead">	
	<div class="row-fluid">
		<div class="span9">
			<div class="navbar">
	      <div class="navbar-inner">

	        <div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
	          	<img src="http://s3-eu-west-1.amazonaws.com/leichtergesundleben/lgl-logo-txt.png" alt="<?php echo get_bloginfo('name'); ?> Logo">
	          </a>

	          <div class="nav-collapse collapse">
	            <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
	          </div><!--/.nav-collapse -->
	        </div> <!-- container -->

	      </div><!-- navbar inner -->
	    </div><!-- navbar -->
	</div>

	<div class="span3 social visible-desktop">
		<a class="btn btn-social" href="https://www.facebook.com/LeichterGesundLeben" target="_blank" title="<?php _e("Facebook Page"); ?>"><i class="fa fa-facebook fa-2x"></i></a>
		<a class="btn btn-social" href="https://twitter.com/LeichterGesund" target="_blank" title="<?php _e("Twitter"); ?>"><i class="fa fa-twitter fa-2x"></i></a>
<!--		<a class="btn btn-social" href="#"><i class="icon-pinterest  icon-2x" target="_blank" title="<?php _e("Pinterest"); ?>"></i></a> -->
		<a class="btn btn-social" href="http://instagram.com/LeichterGesundLeben"><i class="fa fa-instagram fa-2x" target="_blank" title="<?php _e("Instagram"); ?>"></i></a>
		<a class="btn btn-social" href="<?php bloginfo('rss2_url') ?>" title="<?php _e("RSS All Articles Syndication Feed for News Reader"); ?>"><i class="fa fa-rss fa-2x" target="_blank"></i></a>
	</div>
	
	</div>

</div> <!-- masthead -->
</header>
