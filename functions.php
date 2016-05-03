<?php
	
//General Settings
remove_action('wp_head','wp_generator');

// Load site resources	
function load_site_resources() {
	$css_path = get_template_directory_uri().'/css/min/';
	wp_enqueue_style( 'screen', $css_path.'screen.min.css' );
	
	$js_path = get_template_directory_uri().'/js/min/';	
	wp_enqueue_script('main', $js_path.'main.min.js', array('jquery'), '', false);
}
add_action('wp_enqueue_scripts', 'load_site_resources');