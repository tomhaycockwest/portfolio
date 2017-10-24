<?php

// Add the Meta Box
function add_single_meta_box() {
    add_meta_box(
		'single_meta_box', // $id
		__('Layout','me-3-9-3'), // $title
		'show_single_meta_box', // $callback
		'post', // $page
		'side', // $context
		'default'); // $priority
}
add_action('add_meta_boxes', 'add_single_meta_box');

// Field Array
$prefix = 'single_';
$single_meta_fields = array(

	array(
		'label'	=> __('Layout','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.__('layout','me-3-9-3'),
		'type'	=> 'layout'
	)
);


// The Callback
function show_single_meta_box() {
	global $single_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="single_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Begin the field table and loop
	echo '<table class="form-table">';

		$meta = get_post_meta($post->ID, 'single_layout', true);

                              echo '<tr><td>';
                                    if ( !$meta  )
                                       {
                                       echo '<select name="single_layout">';
                                       echo "<option value='single_sidebar'>";
                                       echo __('Display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "<option value='single_full' selected='selected'>";
                                       echo __('Don`t display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "</select>";
                                       }
                                    if ( $meta == "single_sidebar" )
                                       {
                                       echo '<select name="single_layout">';
                                       echo "<option value='single_sidebar' selected='selected'>";
                                       echo __('Display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "<option value='single_full'>";
                                       echo __('Don`t display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "</select>";
                                       }
                                    if ( $meta == "single_full" )
                                       {
                                       echo '<select name="single_layout">';
                                       echo "<option value='single_full' selected='selected'>";
                                       echo __('Don`t display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "<option value='single_sidebar'>";
                                       echo __('Display sidebar','me-3-9-3');
                                       echo "</option>";
                                       echo "</select>";
                                       }
                              echo '</td></tr>';

                echo '</tr>';
	echo '</table>'; // end table
}

// Save the Data
function save_single_meta($post_id) {
    global $single_meta_fields;
	
	// verify nonce
	if (!isset( $_POST['single_meta_box_nonce'] ) || !wp_verify_nonce($_POST['single_meta_box_nonce'], basename(__FILE__)))
		return $post_id;
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
		} elseif (!current_user_can('edit_post', $post_id)) {
			return $post_id;
	}
	
	// loop through fields and save the data
	foreach ($single_meta_fields as $field) {
		if($field['type'] == 'tax_select') continue;
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	} // end foreach

}
add_action('save_post', 'save_single_meta');
?>