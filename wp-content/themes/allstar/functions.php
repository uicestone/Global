<?php
/*
 * Theme specific scripts for Allstar
 */
add_action('init', function(){
	
	register_nav_menu('primary', '主导航');
	
	add_image_size('post-thumbnail', 493, 249, true);
	add_image_size('about-us', 426, 238, true);
	add_image_size('about-us-team', 161, 100, true);
	add_image_size('team', 279, 141, true);
	add_image_size('contact-news', 60, 55, true);
	
	wp_register_style('style', get_template_directory_uri() . '/stylesheets/style.css');
	wp_register_style('responsive', get_template_directory_uri() . '/stylesheets/responsive.css');
	wp_register_style('jquery.onebyone', get_template_directory_uri() . '/stylesheets/jquery.onebyone.css');
	
	wp_register_script('functions', get_template_directory_uri() . '/scripts/functions.js');
	wp_register_script('jquery.onebyone', get_template_directory_uri() . '/scripts/jquery.onebyone.min.js');
	wp_register_script('jquery.bxSlider', get_template_directory_uri() . '/scripts/jquery.bxSlider.min.js');
	wp_register_script('jquery.faq', get_template_directory_uri() . '/scripts/jquery.faq.js');
	wp_register_script('jquery.blackandwhite', get_template_directory_uri() . '/scripts/jquery.blackandwhite.min.js');
	
	add_post_type_support('page', 'excerpt');
	
	add_theme_support('post-thumbnails');
	
});

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('style');
	wp_enqueue_style('responsive');
	wp_enqueue_script('jquery');
	wp_enqueue_script('functions');
	wp_enqueue_script('jquery.bxSlider');
	wp_enqueue_script('jquery.blackandwhite');
	wp_enqueue_script('jquery.faq');
});
