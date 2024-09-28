<?php

// This is the functions.php file

// support functions
function html2wp_theme_setup()
{

   add_theme_support('custom-logo');

   add_theme_support('title-tag');

   add_theme_support('post-thumbnails');

   add_image_size('home-featured', 680, 400, array('center', 'center'));

   add_theme_support('automatic-feed-links');

   register_nav_menus(array(
      'primary' => __('Primary Menu', 'wpacademy'),

   ));


}
add_action('after_setup_theme', 'html2wp_theme_setup');

// scripts & styles
function html2wp_theme_scripts()
{

   wp_enqueue_style('style', get_stylesheet_uri());

   wp_enqueue_script('jquery');


   wp_enqueue_script('browser-js', get_template_directory_uri() . '/assets/js/browser.min.js');


   wp_enqueue_script('breakpoints-js', get_template_directory_uri() . '/assets/js/breakpoints.min.js');

   wp_enqueue_script('util-js', get_template_directory_uri() . '/assets/js/util.js');

   wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');


}

add_action('wp_enqueue_scripts', 'html2wp_theme_scripts');



















































