<?php

class CustomTaxonomy {

	private $single = '';
	private $plural = '';

	public function __construct() {
		add_action('init', array($this, 'register_custom_taxonomy'));
	}

	public function register_custom_taxonomy() {
		$labels = array(
			'name' => sprintf(__('%s', TD), $this->plural),
			'singular_name' => sprintf(__('%s', TD), $this->single),
			'menu_name' => sprintf(__('%s', TD), $this->plural),
			'all_items' => sprintf(__('All %s', TD), $this->plural),
			'parent_item' => sprintf(__('Parent %s', TD), $this->single),
			'parent_item_colon' => sprintf(__('Parent %s:', TD), $this->single),
			'new_item_name' => sprintf(__('New %s', TD), $this->single),
			'add_new_item' => sprintf(__('Add New %s', TD), $this->single),
			'edit_item' => sprintf(__('Edit New %s', TD), $this->single),
			'update_item' => sprintf(__('Update New %s', TD), $this->single),
			'view_item' => sprintf(__('View %s', TD), $this->single),
			'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
			'add_or_remove_items' => sprintf(__('Add or remove New %s', TD), $this->single),
			'choose_from_most_used' => sprintf(__('Choose from the most used %s', TD), $this->plural),
			'popular_items' => sprintf(__('Popular %s', TD), $this->plural),
			'search_items' => sprintf(__('Search New %s', TD), $this->plural),
			'not_found' => __('Not found', TD),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true
		);

		register_taxonomy($this->single, 'posts', $args);
	}
}

// new CustomTaxonomy();
