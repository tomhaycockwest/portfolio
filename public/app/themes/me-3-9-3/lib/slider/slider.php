<?php

//slider post type
function slider_post_type() {
         
         $labels = array(
                'name' => __('Slider','me-3-9-3'),
                'singular_name' => __('Slide','me-3-9-3'),
                'rewrite' => array(
                            'slug' => __( 'me_slider','me-3-9-3')
                            ),
                'add_new' => __('Add Slide','me-3-9-3'),
                'add_new_item' => __('Add New Slide','me-3-9-3'),
                'edit_item' => __('Edit Slide','me-3-9-3'),
                'new_item' => __('New Slide','me-3-9-3'),
                'view_item' => __('Preview Slider','me-3-9-3'),
                'not_found' => __('No Slides Found','me-3-9-3'),
                'not_found_in_trash' => __('No Slides Found In Trash','me-3-9-3'),
                );

         $args = array(
               'labels' => $labels,
               'public' => true,
               'exclude_from_search' => true,
               'publicly_queryable' => true,
               'show_ui' => true,
               'query_var' => true,
               'rewrite' => true,
               'capability_type' => 'post',
               'hierarchical' => false,
               'menu_position' => 100,
               'supports' => array(
                             'title',
                             'thumbnail'
                             )
               );
         
         register_post_type(__( 'me_slider','me-3-9-3'), $args);
}
//END: slider_post_type

// slider_messages
function slider_messages($messages)
{
    $messages[__( 'me_slider', 'me-3-9-3' )] =
        array(
            0 => '',
            1 => __('Slide Updated.','me-3-9-3'),
            2 => __('Custom Field Updated.','me-3-9-3'),
            3 => __('Custom Field Deleted.','me-3-9-3'),
            4 => __('Slider Updated.','me-3-9-3'),
            5 => isset($_GET['revision']) ? sprintf( __('Slide Restored To Revision From %s','me-3-9-3'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => __('Slide Published.','me-3-9-3'),
            7 => __('Slide Saved.','me-3-9-3'),
            8 => __('Slide Submitted.','me-3-9-3'),
            9 => __('Slide Scheduled For: <strong>%1$s</strong>.','me-3-9-3'),
            10 => __('Slide Draft Updated.','me-3-9-3'),
        );
    return $messages;

} // END: slider_messages

//Get the thumbnail
function slider_thumbnail($post_ID) {
    $slider_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($slider_thumbnail_id) {
        $slider_thumbnail_img = wp_get_attachment_image_src($slider_thumbnail_id, 'featured_preview');
        return $slider_thumbnail_img[0];
    }  
}

//Modify admin columns
function slider_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Slide title','me-3-9-3'),
            "thumb" => __('Preview image','me-3-9-3'),
        );
  
        return $columns;  
}

//Content for admin columns
function slider_custom_columns($column){
        global $post, $post_ID;
        switch ($column)  
        {
            case "thumb":
                $slider_thumb = slider_thumbnail($post_ID);
                     if ($slider_thumb) {
                        echo '<img src="' . $slider_thumb . '" width="200" />';
                     }
            break;
        }  
}

add_action( 'init', 'slider_post_type' );
add_filter( 'post_updated_messages', 'slider_messages' );
add_filter('manage_me_slider_posts_columns', 'slider_edit_columns');
add_action('manage_me_slider_posts_custom_column', 'slider_custom_columns', 10, 2);

require_once('slider_metaboxes.php');

?>