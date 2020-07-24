<?php

function grydpark_theme_support(){
	// Adds dynamic title tag support
	add_theme_support('title-tag');
}

// hook
add_action('after_setup_theme', 'grydpark_theme_support');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function grydpark_menus(){
	$locations = array(
		'primary' => "Top Navigation Bar",
		'footer' => "Footer Menu Items"
	);

	register_nav_menus($locations);

}

add_action('init', 'grydpark_menus');

function grydpark_register_styles(){

	$version = wp_get_theme()->get('Version');
	// font awesome
	wp_enqueue_style('grydpark-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
	// google fonts for MDB
	wp_enqueue_style('grydpark-google-font', "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap", array(), '4.5.0', 'all');
	// bootstrap css
	wp_enqueue_style('grydpark-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", array(), '4.5.0', 'all');
	// Material Design Bootstrap
	wp_enqueue_style('grydpark-mdb', "https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css", array(), '4.19.1', 'all');
	// Gryd Fonts
	wp_enqueue_style('grydpark-manrope-font', "https://fonts.googleapis.com/css2?family=Manrope&display=swap", array(), '1.0', 'all');
	wp_enqueue_style('grydpark-ibm-plex-font', "https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap", array(), '1.0', 'all');
	// Custom Styling
	wp_enqueue_style('grydpark-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

// hook
add_action('wp_enqueue_scripts', 'grydpark_register_styles');

function grydpark_register_scripts(){
	// JQuery
	wp_enqueue_script('grydpark-jquery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
	// popper (bootstrap tooltips)
	wp_enqueue_script('grydpark-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
	// bootstrap core js
	wp_enqueue_script('grydpark-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js", array(), '4.5.0', true);
	// mdb core js
	wp_enqueue_script('grydpark-mdb-js', "https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js", array(), '4.19.1', true);
	// custom js
	wp_enqueue_script('grydpark-main-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
	
}

// hook
add_action('wp_enqueue_scripts', 'grydpark_register_scripts');


function grydpark_widget_areas(){
	register_sidebar(
		array(
			'name' => 'Footer Area',
			'id' => 'footer-1',
			'description' => 'Footer Widget Area',
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget' => ''
		)
	);
}
add_action('widgets_init', 'grydpark_widget_areas');

?>