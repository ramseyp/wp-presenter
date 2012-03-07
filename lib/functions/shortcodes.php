<?php

add_filter('widget_text', 'do_shortcode');

// Return the site's URL
add_shortcode('url','s25_url_shortcode');
function url_shortcode($atts) {
	return get_bloginfo('url');
}

// Open a div
add_shortcode('div', 's25_div_shortcode');
function s25_div_shortcode($atts) {
	extract(shortcode_atts(array('class' => '', 'id' => '' ), $atts));
	if ($class) $show_class = ' class="'.$class.'"';
	if ($id) $show_id = ' id="'.$id.'"';
	return '<div'.$show_class.$show_id.'>';
}

// Close div
add_shortcode('end-div', 's25_end_div_shortcode');
function s25_end_div_shortcode($atts) {
	return '</div>';
}

// Heading Class / ID
add_shortcode('heading', 's25_heading_shortcode');
function s25_heading_shortcode($atts) {
	extract(shortcode_atts(array('level'=>'', 'class' => '', 'id' => '' ), $atts));
	if ($level) $show_level = $level.' ';
	if ($class) $show_class = ' class="'.$class.'"';
	if ($id) $show_id = ' id="'.$id.'"';
	return '<h'.$level.$show_class.$show_id.'>';
}
// Closes a heading
add_shortcode('end-heading', 's25_end_heading_shortcode');
function rm_end_heading_shortcode($atts) {
	extract(shortcode_atts(array('level'=>''), $atts));
	if ($level) $show_level = $level;
	return '</h'.$level.'>';
}

// iframe code for google maps embed
add_shortcode('googlemap', 's25_map_iframe_shortcode');
function s25_map_iframe_shortcode($atts) {
	extract(shortcode_atts(array('width'=>'', 'height' => '', 'address' => '' ), $atts));
	if ($width) $show_width = $width;
	if ($height) $show_height = $height;
	if ($address) $show_address = urlencode ( $address );
	return '<div id="s25_googlemaps"><iframe width="'.$show_width.'" height="'.$show_height.'" src="http://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;z=14&amp;iwloc=&amp;geocode=&amp;q='.$show_address.'?>&amp;output=embed"></iframe><br /><small><a href="http://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q='.$show_address.'" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>';
}

// Vimeo Shortcode
add_shortcode('vimeo', 's25_vimeo_shortcode');
function s25_vimeo_shortcode($atts) {
	extract(shortcode_atts(array( 'src' => '','width'  => '','height'  => ''), $atts));
	if ($src) $show_src = esc_url(str_replace('http://vimeo.com/','http://player.vimeo.com/video/',$src), array('http'));
	if ($width) $show_width = ' width="'.$width.'"';
	if ($height) $show_height = ' height="'.$height.'"';

	return '<iframe src="'.$show_src.'?title=0&amp;byline=0&amp;portrait=0" '.$show_width.$show_height.' frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>';
}

// Youtube Shortcode
add_shortcode('youtube', 's25_youtube_shortcode');
function s25_youtube_shortcode($atts) {
	extract(shortcode_atts(array( 'src' => '','width'  => '','height'  => ''), $atts));
	if ($src) $show_src = esc_url(str_replace('watch?v=','embed/',$src), array('http'));
	
	if ($width) $show_width = ' width="'.$width.'"';
	if ($height) $show_height = ' height="'.$height.'"';
	return '<iframe '.$show_width.$show_height.' src="'.$show_src.'" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>';
}
