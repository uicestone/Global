<?php
/*
 * Theme specific scripts for Allstar
 */
add_action('init', function(){
	wp_register_style('style', get_template_directory_uri() . '/stylesheets/style.css');
	wp_register_style('responsive', get_template_directory_uri() . '/stylesheets/responsive.css');
	wp_register_style('jquery.onebyone', get_template_directory_uri() . '/stylesheets/jquery.onebyone.css');
	
	wp_register_script('functions', get_template_directory_uri() . '/scripts/functions.js');
	wp_register_script('jquery.onebyone', get_template_directory_uri() . '/scripts/jquery.onebyone.min.js');
	wp_register_script('jquery.bxSlider', get_template_directory_uri() . '/scripts/jquery.bxSlider.min.js');
	wp_register_script('jquery.faq', get_template_directory_uri() . '/scripts/jquery.faq.js');
	wp_register_script('jquery.blackandwhite', get_template_directory_uri() . '/scripts/jquery.blackandwhite.min.js');
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
