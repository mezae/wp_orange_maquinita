<?php

function elmer_script_enqueue() {
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/elmer.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customnav', get_template_directory_uri() . '/css/navbar.css', array(), '1.0.0', 'all');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/elmer.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'elmer_script_enqueue');

function elmer_theme_setup() {
	add_theme_support('menus');
	
	register_nav_menu('secondary', 'Footer Navigation');
	register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'elmer_theme_setup');

add_theme_support('post-formats');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read on...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//walker to properly style navbar menu
require get_template_directory() . '/inc/walker.php';