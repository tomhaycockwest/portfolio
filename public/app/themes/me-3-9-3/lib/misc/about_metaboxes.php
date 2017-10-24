<?php

// Add the Meta Box
function add_about_meta_box() {
    add_meta_box(
		'about_meta_box', // $id
		__('Social profiles','me-3-9-3'), // $title
		'show_about_meta_box', // $callback
		'about', // $page
		'normal', // $context
		'high'); // $priority
}
add_action('add_meta_boxes', 'add_about_meta_box');

// Field Array
$prefix = 'about_';
$about_meta_fields = array(

        array(
		'label'	=> __('Facebook','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'facebook',
		'type'	=> 'facebook'
	),
	array(
		'label'	=> __('Twitter','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'twitter',
		'type'	=> 'twitter'
	),
	array(
		'label'	=> __('Instagram','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'instagram',
		'type'	=> 'instagram'
	),
	array(
		'label'	=> __('Dribbble','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'dribbble',
		'type'	=> 'dribbble'
	),
	array(
		'label'	=> __('Skype','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'skype',
		'type'	=> 'skype'
	),
	array(
		'label'	=> __('Youtube','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'youtube',
		'type'	=> 'youtube'
	),
	array(
		'label'	=> __('Vimeo','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'vimeo',
		'type'	=> 'vimeo'
	),
	array(
		'label'	=> __('LinkedIn','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'linkedin',
		'type'	=> 'linkedin'
	),
	array(
		'label'	=> __('Tumblr','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'tumblr',
		'type'	=> 'tumblr'
	),
	array(
		'label'	=> __('Pinterest','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'pinterest',
		'type'	=> 'pinterest'
	),
	array(
		'label'	=> __('Google Plus','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'google',
		'type'	=> 'google'
	),
	array(
		'label'	=> __('DeviantArt','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'deviant',
		'type'	=> 'deviant'
	),
	array(
		'label'	=> __('SoundCloud','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'soundcloud',
		'type'	=> 'soundcloud'
	),
	array(
		'label'	=> __('Flickr','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'flickr',
		'type'	=> 'flickr'
	),
	array(
		'label'	=> __('Behance','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'behance',
		'type'	=> 'behance'
	)

);


// The Callback
function show_about_meta_box() {
	global $about_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="about_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Begin the field table and loop
	echo '<table class="form-table">';
	foreach ($about_meta_fields as $field) {

		$meta = get_post_meta($post->ID, $field['id'], true);

                switch($field['type']) {

                         //Facebook
                         case 'facebook':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Twitter
                         case 'twitter':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Skype
                         case 'skype':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Dribbble
                         case 'dribbble':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Youtube
                         case 'youtube':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Vimeo
                         case 'vimeo':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //LinkedIn
                         case 'linkedin':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Tumblr
                         case 'tumblr':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Instagram
                         case 'instagram':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Pinterest
                         case 'pinterest':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Google Plus
                         case 'google':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //DeviantArt
                         case 'deviant':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //SoundCloud
                         case 'soundcloud':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;
                         
                         //Flickr
                         case 'flickr':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;

                         //Behance
                         case 'behance':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />';
                              echo '</td></tr>';
                         break;

                }//end switch
                echo '</tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_about_meta($post_id) {
    global $about_meta_fields;
	
	// verify nonce
	if (!isset( $_POST['about_meta_box_nonce'] ) || !wp_verify_nonce($_POST['about_meta_box_nonce'], basename(__FILE__))) 
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
	foreach ($about_meta_fields as $field) {
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
add_action('save_post', 'save_about_meta');

?>