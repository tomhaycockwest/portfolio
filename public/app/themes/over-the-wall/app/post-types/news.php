<?php

class News {

	private $single = 'News Item';
	private $plural = 'News';
	private $title = 'News';
	private $slug = 'news';

	public function __construct() {
		add_action('init', array($this, 'register_post_type'));
	}

	public function register_post_type() {
		$labels = array(
			'name' => sprintf( __( '%s', TD ), $this->title ),
			'singular_name' => sprintf( __( '%s', TD ), $this->single ),
			'menu_name' => sprintf( __( '%s', TD ), $this->plural ),
			'parent_item_colon' => sprintf( __( 'Parent %s', TD ), $this->single ),
			'all_items' => sprintf( __( 'All %s', TD ), $this->plural ),
			'view_item' => sprintf( __( 'View %s', TD ), $this->single ),
			'add_new_item' => sprintf( __( 'Add New %s', TD ), $this->single ),
			'add_new' => sprintf( __( 'Add New %s', TD ), $this->single ),
			'edit_item' => sprintf( __( 'Edit %s', TD ), $this->single ),
			'update_item' => sprintf( __( 'Update %s', TD ), $this->single ),
			'search_items' => sprintf( __( 'Search %s', TD ), $this->plural ),
			'not_found' => __( 'Not found', TD ),
			'not_found_in_trash' => __( 'Not found in Trash', TD ),
		);

		$args = array(
			'labels' => $labels,
			'supports' => array('title'),
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'capability_type' => 'post',
			'menu_position' => 40,
			'menu_icon' => 'dashicons-media-text',
		);

		register_post_type( $this->slug, $args );
	}

}

new News();
