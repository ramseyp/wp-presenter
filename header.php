<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php 
	$theme  = get_theme( get_current_theme() );
	$css_loc = get_template_directory_uri().'/lib/css/';
	// CSS
	wp_register_style('i140',$css_loc.'1140.css', array(), $theme['Version'], 'screen');
	wp_register_style('flexslide',$css_loc.'flexslider.css', array(), $theme['Version'], 'screen');
	wp_register_style('ie',$css_loc.'ie.css', array(), $theme['Version'], 'screen');
	wp_enqueue_style('i140');
	wp_enqueue_style('flexslide');
	wp_enqueue_style('ie');
	?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php
	$js_loc = get_template_directory_uri().'/lib/js/';
	wp_register_script('flexslider', $js_loc.'jquery.flexslider-min.js', array('jquery'), '1.8',false);
	wp_register_script('slide25', $js_loc.'slide25.js', array('jquery'), '1.0',false);
	wp_enqueue_script('flexslider');
	wp_enqueue_script('slide25');

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
	?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<div id="main" class="container">