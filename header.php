<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<!-- "H5": The HTML-5 WordPress Template Theme -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<?php wp_head(); ?>
 
		<?php /* <script src="<?php bloginfo('template_directory'); ?>/javascript/jquery-1.7.min.js"></script>  */ ?>


		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">




		<?php

    			wp_deregister_script( 'jquery' );
    			wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    			wp_enqueue_script('jquery');
 
		?>

		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/coin-slider-styles.css" media="screen">

	</head>
	<body <?php body_class(); ?>>
                
		<header>
			<h1><a href="<?php bloginfo('url'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
			<h2><span><?php bloginfo('description'); ?></span></h2>
		</header>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			<div class="subnav">
			<ul style="clear: both">	
				<?php 
				if ($post->post_parent)	{
	              $ancestors=get_post_ancestors($post->ID);
	              $root=count($ancestors)-1;
	              $parent = $ancestors[$root];
                } else {
                  $parent = $post->ID;
                }				
				wp_list_pages("title_li=&child_of=". $parent ."&echo=1&depth=1"); ?>
			</ul>
			</div>
				
		</nav>
