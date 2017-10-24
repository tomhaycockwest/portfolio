<?php

// Add the Meta Box
function add_custom_meta_box() {
    add_meta_box(
		'custom_meta_box', // $id
		__('Add more content to the item','me-3-9-3'), // $title
		'show_custom_meta_box', // $callback
		'portfolio', // $page
		'normal', // $context
		'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(

	array(
		'label'	=> __('Layout','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.__('layout','me-3-9-3'),
		'type'	=> 'layout'
	),
        array(
		'label'	=> __('Repeatable','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.__('repeatable','me-3-9-3'),
		'type'	=> 'repeatable'
	),
	array(
		'label'	=> __('Vimeo video','me-3-9-3'),
		'desc'	=> __('Vimeo &lt;iframe> code','me-3-9-3'),
		'id'	=> $prefix.'vimeo',
		'type'	=> 'vimeo'
	),
	array(
		'label'	=> __('Youtube video','me-3-9-3'),
		'desc'	=> __('Youtube &lt;iframe> code','me-3-9-3'),
		'id'	=> $prefix.'youtube',
		'type'	=> 'youtube'
	),
	array(
		'label'	=> __('SoundCloud player','me-3-9-3'),
		'desc'	=> __('SoundCloud &lt;iframe> code','me-3-9-3'),
		'id'	=> $prefix.'soundcloud',
		'type'	=> 'soundcloud'
	),
	array(
		'label'	=> __('Link to the project','me-3-9-3'),
		'desc'	=> __('Link to the project','me-3-9-3'),
		'id'	=> $prefix.'project_link',
		'type'	=> 'project_link'
	),
	array(
		'label'	=> __('Optional project page url','me-3-9-3'),
		'desc'	=> __('Must be a valid url with <strong>http://</strong> ! Use this option in case you want to show the project on a different page instead of loading via ajax. For sure the thumbnails can link to a page of a third party site such as Behance or Dribbble.','me-3-9-3'),
		'id'	=> $prefix.'project_page_url',
		'type'	=> 'project_page_url'
	),
	array(
		'label'	=> __('Lightbox Image','me-3-9-3'),
		'desc'	=> '',
		'id'	=> $prefix.'lightbox_image',
		'type'	=> 'lightbox_image'
	)
);


// The Callback
function show_custom_meta_box() {
	global $custom_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Begin the field table and loop
	echo '<table class="form-table">';
	foreach ($custom_meta_fields as $field) {

		$meta = get_post_meta($post->ID, $field['id'], true);

                switch($field['type']) {

                         //Layout
                         case 'layout':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              if ( !$meta || $meta == "layout1" ) {
                                 echo '<div class="layout_option">
                                            <div class="icon_layout1"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout1" checked="checked">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout2"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout2">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout3"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout3">
                                       </div>
                                       
                                       <div class="layout_option">
                                            <div class="icon_layout4"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout4">
                                       </div>';
                              echo '</td></tr>';
                              }
                              if ( $meta == "layout2" ) {
                                 echo '<div class="layout_option">
                                            <div class="icon_layout1"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout1">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout2"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout2" checked="checked">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout3"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout3">
                                       </div>
                                       
                                       <div class="layout_option">
                                            <div class="icon_layout4"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout4">
                                       </div>';
                              echo '</td></tr>';
                              }
                              if ( $meta == "layout3" ) {
                                 echo '<div class="layout_option">
                                            <div class="icon_layout1"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout1">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout2"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout2">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout3"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout3" checked="checked">
                                       </div>
                                       
                                       <div class="layout_option">
                                            <div class="icon_layout4"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout4">
                                       </div>';
                              }
                              if ( $meta == "layout4" ) {
                                 echo '<div class="layout_option">
                                            <div class="icon_layout1"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout1">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout2"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout2">
                                       </div>
                                    
                                       <div class="layout_option">
                                            <div class="icon_layout3"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout3">
                                       </div>
                                       
                                       <div class="layout_option">
                                            <div class="icon_layout4"></div>
                                            <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="layout4" checked="checked">
                                       </div>';
                              echo '</td></tr>';
                              }
                         break;

                          case 'repeatable':
  			  echo	'<tr><td>';
				echo '<p><strong>';
                                echo __('Slider images','me-3-9-3');
                                echo '</strong></p>';
                                echo '<a class="repeatable-add button" href="#">';
				echo __('Add new image','me-3-9-3');
                                echo '</a>';
                                echo '<ul id="'.$field['id'].'-repeatable" class="custom_repeatable" style="margin-top: 15px;">';
						$i = 100;
						if ($meta) {
							foreach($meta as $row) {
								echo '<li>
                                                                          <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="'.$row.'" size="30" style="margin-right: 10px;" />';

                                                                          echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                          echo __('Select image','me-3-9-3');
                                                                          echo '</a>';

                                                                          echo '<a class="repeatable-remove button" href="#">';
                                                                          echo __('Remove image','me-3-9-3');
                                                                          echo '</a><div class="admin_image_container" style="display: block;"><img src="'.$row.'" alt="" /></div></li>';

								$i--;
							}
						} else {
							echo '<li>
                                                                  <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="" size="30" style="margin-right: 10px;" />';

                                                                  echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                  echo __('Select image','me-3-9-3');
                                                                  echo '</a>';

                                                                  echo '<a class="repeatable-remove button" href="#">';
                                                                  echo __('Remove image','me-3-9-3');
                                                                  echo '</a><div class="admin_image_container"></div></li>';
						}
						echo '</ul>';
                         echo '</td></tr>';
                         break;
                         
                         //Vimeo embed code
                         case 'vimeo':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="57" rows="4" style="width: 100%;">'.$meta.'</textarea>
                                   <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Youtube embed code
                         case 'youtube':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="57" rows="4" style="width: 100%;">'.$meta.'</textarea>
                                   <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Youtube embed code
                         case 'soundcloud':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="57" rows="4" style="width: 100%;">'.$meta.'</textarea>
                                   <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Project link
                         case 'project_link':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" style="width: 100%;"/>';
                              echo '</td></tr>';
                         break;
                         
                         //Project page url
                         case 'project_page_url':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" style="width: 100%;"/>
                                    <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Lightbox Image
                         case 'lightbox_image':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" class="image_select_field" size="30" style="margin-right: 10px;" />';
                              echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                              echo __('Select image','me-3-9-3');
                              echo '</a>';

                              echo '<a class="image_remove button" href="#">';
                              echo __('Remove image','me-3-9-3');
                              echo '</a></li>';
                              if ( $meta ) { echo '<div class="admin_image_container" style="display: block;"><img src="'.$meta.'" alt="" /></div>'; }
                              if (!$meta ) { echo '<div class="admin_image_container"></div>'; }
                              echo '</td></tr>';
                         break;

                }//end switch
                echo '</tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_custom_meta($post_id) {
    global $custom_meta_fields;
	
	// verify nonce
	if (!isset( $_POST['custom_meta_box_nonce'] ) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
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
	foreach ($custom_meta_fields as $field) {
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
add_action('save_post', 'save_custom_meta');

?>