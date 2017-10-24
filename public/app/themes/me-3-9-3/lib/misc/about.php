<?php

function about_post_type() {

         $labels = array(
                 'name' => __( 'About','me-3-9-3'),
                 'singular_name' => __('Person','me-3-9-3'),
                 'rewrite' => array(
                              'slug' => __( 'about','me-3-9-3')
                              ),
                 'add_new' => _x('Add Person', 'portfolio','me-3-9-3'),
                 'add_new_item' => __('Add New Person','me-3-9-3'),
                 'edit_item' => __('Edit Person','me-3-9-3'),
                 'new_item' => __('New Person','me-3-9-3' ),
                 'view_item' => __('Preview About Section','me-3-9-3' ),
                 'search_items' => __('Search Portfolio','me-3-9-3' ),
                 'not_found' => __('No Persons Found','me-3-9-3' ),
                 'not_found_in_trash' => __('No Persons Found In Trash','me-3-9-3' ),
                 'parent_item_colon' => '',
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
                             'editor',
                             'thumbnail'
                             )
               );

         register_post_type(__( 'about', 'me-3-9-3' ), $args);

}

function about_messages($messages) {
    global $post, $post_ID;
    $messages[__( 'about','me-3-9-3' )] =
        array(
            0 => '',
            1 => sprintf(__('Informations Updated.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me-3-9-3'),
            3 => __('Custom Field Deleted.','me-3-9-3'),
            4 => __('About Page Updated.','me-3-9-3'),
            5 => isset($_GET['revision']) ? sprintf( __('Person Restored To Revision From %s','me-3-9-3'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Person Published.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            7 => __('Person Saved.','me-3-9-3'),
            8 => sprintf(__('Person Submitted.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Person Scheduled For: <strong>%1$s</strong>.','me-3-9-3'), date_i18n( __( 'M j, Y @ G:i','me-3-9-3' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Draft Updated.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );
    return $messages;

}

//Get the thumbnail
function about_thumbnail($post_ID) {
    global $post, $post_ID;
    $about_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($about_thumbnail_id) {
        $about_thumbnail_img = wp_get_attachment_image_src($about_thumbnail_id, 'featured_preview');
        return $about_thumbnail_img[0];
    }  
}

//Modify admin columns
function about_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Title (short intro)','me-3-9-3'),
            "thumb" => __('Profile picture','me-3-9-3'),
        );
  
        return $columns;  
}

//Content for admin columns
function about_custom_columns($column){
        global $post, $post_ID;  
        switch ($column)  
        {
            case "category":
                echo get_the_term_list($post->ID, 'filter', '', ', ','');
                break;
            case "thumb":
                $about_thumb = portfolio_thumbnail($post_ID);
                     if ($about_thumb) {
                        echo '<img src="' . $about_thumb . '" width="150" />';
                     }
            break;
        }  
}

add_action( 'init', 'about_post_type' );
add_filter( 'post_updated_messages', 'about_messages' );
add_filter('manage_about_posts_columns', 'about_edit_columns');
add_action('manage_about_posts_custom_column', 'about_custom_columns', 10, 2);
require_once('about_metaboxes.php');
?>