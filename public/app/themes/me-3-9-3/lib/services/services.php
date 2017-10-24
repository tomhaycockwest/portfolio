<?php

function service_post_type() {

         $labels = array(
                 'name' => __( 'Services','me-3-9-3'),
                 'singular_name' => __('Service','me-3-9-3'),
                 'rewrite' => array(
                              'slug' => __( 'service','me-3-9-3')
                              ),
                 'add_new' => __('Add Service','me-3-9-3'),
                 'add_new_item' => __('Add New Service','me-3-9-3'),
                 'edit_item' => __('Edit Service','me-3-9-3'),
                 'new_item' => __('New Service','me-3-9-3'),
                 'view_item' => __('Preview Services Section','me-3-9-3'),
                 'search_items' => __('Search Services','me-3-9-3'),
                 'not_found' => __('No Services Found','me-3-9-3'),
                 'not_found_in_trash' => __('No Services Found In Trash','me-3-9-3'),
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

         register_post_type(__( 'service', 'me-3-9-3' ), $args);

}

function service_messages($messages) {
    global $post, $post_ID;
    $messages[__( 'service', 'me-3-9-3' )] =
        array(
            0 => '',
            1 => sprintf(__('Service Updated.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me-3-9-3'),
            3 => __('Custom Field Deleted.','me-3-9-3'),
            4 => __('Services Updated.','me-3-9-3'),
            5 => isset($_GET['revision']) ? sprintf( __('Service Restored To Revision From %s','me-3-9-3'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Service Information Published.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            7 => __('Service Information Saved.','me-3-9-3'),
            8 => sprintf(__('Service Information Submitted.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Service Information Scheduled For: <strong>%1$s</strong>.','me-3-9-3'), date_i18n( __( 'M j, Y @ G:i','me-3-9-3' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Service Information Draft Updated.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );
    return $messages;

}

//Modify admin columns
function services_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Service name','me-3-9-3'),
            "description" => __('Description','me-3-9-3'),
        );
  
        return $columns;  
}

//Content for admin columns
function services_custom_columns($column){
        global $post, $post_ID;  
        switch ($column)  
        {
            case "description":
                if ( get_the_content() ) :
                   $content = get_the_content();
                   $content = strip_tags($content);
                   echo substr($content, 0, 100);
                   echo "...";
                endif;
            break;
        }
}
require_once('service_metaboxes.php');
add_action( 'init', 'service_post_type' );
add_filter( 'post_updated_messages', 'service_messages' );
add_filter('manage_service_posts_columns', 'services_edit_columns');
add_action('manage_service_posts_custom_column', 'services_custom_columns', 10, 2);
?>