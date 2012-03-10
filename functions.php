<?php

add_action( 'after_setup_theme', 's25_presenter_setup' );
function s25_presenter_setup() {
	// Admin (Backend) Setup first	
	// Change the labeling for the "Posts" menu to "Slides"
	add_action( 'init', 'crm_change_post_object_label' );
	add_action( 'init', 's25_change_categories_label' );
	add_action( 'admin_menu', 'crm_change_post_menu_label' );
	// Change post title text
	add_action( 'gettext', 'crm_change_title_text' );

	// Internationalization
	load_theme_textdomain( 'twentyeleven', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Setup new sidebars for the footer
	register_sidebar( array(
		'id'			=> 'homepage',
		'name'			=> __( 'Homepage', 'genesis' ),
		'description'	=> __( '' ),
	) );
	register_sidebar( array(
		'id'			=> 'footer-widget1',
		'name'			=> __( 'Footer Widget first', 'presenter' ),
		'description'	=> __( '' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
		'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
	) );
	register_sidebar( array(
		'id'			=> 'footer-widget2',
		'name'			=> __( 'Footer Widget second', 'presenter' ),
		'description'	=> __( '' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
		'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
	) );
	register_sidebar( array(
		'id'			=> 'footer-widget3',
		'name'			=> __( 'Footer Widget third', 'presenter' ),
		'description'	=> __( '' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
		'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
	) );


	// Frontend setup

	// Setup Shortcodes
	include_once( get_template_directory_uri() . '/lib/functions/shortcodes.php');


}

/**
 * Change post title text
 *
 * @author Andrew Norcross
 * @link http://www.billerickson.net/twentyten-crm/
 */
function crm_change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Slides';
	$submenu['edit.php'][5][0] = 'Slides';
	$submenu['edit.php'][10][0] = 'Add Slides';
	$submenu['edit.php'][15][0] = 'Presentations';
	echo '';
}
function crm_change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Slides';
	$labels->singular_name = 'Slide';
	$labels->add_new = 'Add Slide';
	$labels->add_new_item = 'Add Slide';
	$labels->edit_item = 'Edit Slide';
	$labels->new_item = 'Slide';
	$labels->view_item = 'View Slide';
	$labels->search_items = 'Search Slides';
	$labels->not_found = 'No Slides found';
	$labels->not_found_in_trash = 'No Slides found in Trash';
}

function s25_change_categories_label() {
	global $wp_taxonomies;
	$labels = &$wp_taxonomies['category']->labels;
	$labels->name = 'Presentations';
	$labels->singular_name = 'Presentation';
	$labels->add_new = 'Add New Presentation';
	$labels->add_new_item = 'Add Presentation';
	$labels->edit_item = 'Edit Presentation';
	$labels->new_item = 'Presentation';
	$labels->view_item = 'View Presentation';
	$labels->search_items = 'Search Presentations';
	$labels->not_found = 'No Presentations found';
	$labels->not_found_in_trash = 'No Presentations found in Trash';
}

function crm_change_title_text( $translation ) {
	global $post;
	if( isset( $post ) ) {
		switch( $post->post_type ){
			case 'post' :
				if( $translation == 'Enter title here' ) return 'Enter Slide Title Here';
			break;
		}
	}
	return $translation;
}

// Set number of posts per page to be one
add_filter('pre_get_posts', 'filter_homepage_posts');
function filter_homepage_posts($query) {
	$limit_number_of_posts = -1;
	if ( $query->is_home || $query->is_archive ) {
		$query->set( 'posts_per_page', $limit_number_of_posts );
		$query->set( 'ignore_sticky_posts', 1 );
		}
	return $query;
}

