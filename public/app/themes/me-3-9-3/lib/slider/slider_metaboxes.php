<?php

// Add the Meta Box
function add_slider_meta_box() {
    add_meta_box(
		'slider_meta_box', // $id
		__('Add more content to the item','me-3-9-3'), // $title
		'show_slider_meta_box', // $callback
		'me_slider', // $page
		'normal', // $context
		'high'); // $priority
}
add_action('add_meta_boxes', 'add_slider_meta_box');

// Field Array
$prefix = 'slider_';
$slider_meta_fields = array(

	array(
		'label'	=> __('Caption','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'caption',
		'type'	=> 'caption'
	),
	array(
		'label'	=> __('Link','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'link',
		'type'	=> 'link'
	),
	array(
		'label'	=> __('Video','me-3-9-3'),
		'desc'	=> __('YouTube or Vimeo iframe embed code','me-3-9-3'),
		'id'	=> $prefix.'video',
		'type'	=> 'video'
	)
);


// The Callback
function show_slider_meta_box() {
	global $slider_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="slider_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Begin the field table and loop
	echo '<table class="form-table">';
	foreach ($slider_meta_fields as $field) {

		$meta = get_post_meta($post->ID, $field['id'], true);

                switch($field['type']) {

                         //Caption
                         case 'caption':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" style="width: 100%;"/>';
                              echo '</td></tr>';
                         break;

                         //Link
                         case 'link':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" style="width: 100%;"/>';
                              echo '</td></tr>';
                         break;
                         
                         //Video
                         case 'video':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" rows="8" style="width: 100%;"/>'.$meta.'</textarea>';
                              echo '</td></tr>';
                         break;

                }//end switch
                echo '</tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_slider_meta($post_id) {
    global $slider_meta_fields;
	
	// verify nonce
	if (!isset( $_POST['slider_meta_box_nonce'] ) || !wp_verify_nonce($_POST['slider_meta_box_nonce'], basename(__FILE__))) 
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
	foreach ($slider_meta_fields as $field) {
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
add_action('save_post', 'save_slider_meta');

?>