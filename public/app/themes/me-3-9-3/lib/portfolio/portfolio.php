<?php

//porfolio_post_type
function portfolio_post_type() {
         
         $labels = array(
                 'name' => __( 'Portfolio','me-3-9-3'),
                 'singular_name' => __('Portfolio item','me-3-9-3'),
                 'rewrite' => array(
                              'slug' => __( 'portfolio','me-3-9-3')
                              ),
                 'add_new' => __('Add Item', 'me-3-9-3'),
                 'add_new_item' => __('Add New Item','me-3-9-3'),
                 'edit_item' => __('Edit Portfolio Item','me-3-9-3'),
                 'new_item' => __('New Portfolio Item','me-3-9-3'),
                 'view_item' => __('Preview item','me-3-9-3'),
                 'search_items' => __('Search Portfolio','me-3-9-3'),
                 'not_found' => __('No Portfolio Items Found','me-3-9-3'),
                 'not_found_in_trash' => __('No Portfolio Items Found In Trash','me-3-9-3'),
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

         register_post_type(__( 'portfolio','me-3-9-3'), $args);

}//END: porfolio_post_type

// portfolio_messages
function portfolio_messages($messages)
{  
    global $post, $post_ID;
    $messages[__( 'portfolio', 'me-3-9-3' )] =
        array(  
            0 => '',  
            1 => sprintf(__('Portfolio Updated.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me-3-9-3'),
            3 => __('Custom Field Deleted.','me-3-9-3'),
            4 => __('Portfolio Updated.','me-3-9-3'),
            5 => isset($_GET['revision']) ? sprintf( __('Portfolio Restored To Revision From %s','me-3-9-3'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Portfolio Item Published.','me-3-9-3'), esc_url(get_permalink($post_ID))),
            7 => __('Portfolio Item Saved.','me-3-9-3'),
            8 => sprintf(__('Portfolio Item Submitted.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Portfolio Item Scheduled For: <strong>%1$s</strong>.','me-3-9-3'), date_i18n( __( 'M j, Y @ G:i','me-3-9-3' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Portfolio Item Draft Updated.','me-3-9-3'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );  
    return $messages;  
  
} // END: portfolio_messages

// portfolio_filter
function portfolio_filter()  
{  
    register_taxonomy(
        __( 'filter','me-3-9-3' ),
        array(__( 'portfolio','me-3-9-3' )),
        array(
            'hierarchical' => true,
            'label' => __( 'Categories','me-3-9-3' ),
            'singular_label' => __( 'Filter','me-3-9-3' ),
            'rewrite' => array(
                'slug' => 'filter',
                'hierarchical' => true
            )  
        )  
    );  
} // END: portfolio_filter

//Get the thumbnail
function portfolio_thumbnail($post_ID) {
    $portfolio_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($portfolio_thumbnail_id) {
        $portfolio_thumbnail_img = wp_get_attachment_image_src($portfolio_thumbnail_id, 'featured_preview');
        return $portfolio_thumbnail_img[0];
    }  
}

//Modify admin columns
function portfolio_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Project name','me-3-9-3'),
            "category" => __('Category','me-3-9-3'),
            "thumb" => __('Thumbnail','me-3-9-3'),
        );
  
        return $columns;  
}

//Content for admin columns
function portfolio_custom_columns($column){
        global $post, $post_ID;
        switch ($column)  
        {  
            case "category":
                echo get_the_term_list($post->ID, 'filter', '', ', ','');
                break;
            case "thumb":
                $portfolio_thumb = portfolio_thumbnail($post_ID);
                     if ($portfolio_thumb) {
                        echo '<img src="' . $portfolio_thumb . '" width="150" />';
                     }
            break;
        }  
}

add_action( 'init', 'portfolio_post_type' );
add_action( 'init', 'portfolio_filter', 0 );
add_filter( 'post_updated_messages', 'portfolio_messages' );
add_filter('manage_portfolio_posts_columns', 'portfolio_edit_columns');
add_action('manage_portfolio_posts_custom_column', 'portfolio_custom_columns', 10, 2);
require_once('portfolio_metaboxes.php');

?>