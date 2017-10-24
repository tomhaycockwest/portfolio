<?php

// Libraries
foreach(glob(get_template_directory() . '/app/lib/*.php') as $filename) {
	require $filename;
}

// Taxonomies
foreach(glob(get_template_directory() . '/app/taxonomies/*.php') as $filename) {
	require $filename;
}

// Post types
foreach(glob(get_template_directory() . '/app/post-types/*.php') as $filename) {
	require $filename;
}

// Shortcodes
foreach(glob(get_template_directory() . '/app/shortcodes/*.php') as $filename) {
	require $filename;
}

// Functions
foreach(glob(get_template_directory() . '/app/functions/*.php') as $filename) {
	require $filename;
}

add_action( 'admin_menu', 'remove_menus' );

function remove_menus() {
  global $menu;
  global $submenu;

  // echo '<pre>';
  // print_r($menu);
  // print_r($submenu);
  // echo '</pre>';

  // If you're not the site creator
  // Hide some menus
  if ( wp_get_current_user()->ID != 1 ) {
  	unset($menu[5]); // Removes 'Posts'
    unset($menu[25]); // Removes 'Comments'.
    unset($menu[75]); // Removes 'Tools'.
  }
}


// Theme settings
require 'app/application.php';
