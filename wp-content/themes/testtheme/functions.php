<?php

function test_script_enqueue()
{
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/test.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquerydefault', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), '2.2.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/test.js', array(), '1.0.0', true);
	
}

add_action('wp_enqueue_scripts', 'test_script_enqueue');

function test_theme_setup()
{
	add_theme_support('menus');
	
	register_nav_menu('primary','Primary header navigation');
	register_nav_menu('secondary','Footer navigation');
}

add_action ('init', 'test_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image', 'video', 'quote'));
?>