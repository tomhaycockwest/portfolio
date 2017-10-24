<?php
function my_admin_scripts() {

         wp_enqueue_script('jquery-ui-sortable');
         wp_enqueue_script('media-upload');
         wp_enqueue_script('thickbox');
         wp_enqueue_script('colorpicker2', get_template_directory_uri().'/lib/admin/colorpicker/js/colorpicker.js');
         wp_register_script('media-box', get_template_directory_uri() .'/lib/misc/media-box.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('media-box');
         wp_enqueue_media();
         
         wp_register_script('tipTip', get_template_directory_uri().'/lib/admin/tipTip.js', array('jquery'));
         wp_enqueue_script('tipTip');
         wp_register_script('admin', get_template_directory_uri().'/lib/admin/admin.js', array('jquery','tipTip'));
         wp_enqueue_script('admin');
}

function my_admin_styles() {

         wp_enqueue_style('thickbox');
         wp_enqueue_style('colorpicker', get_template_directory_uri().'/lib/admin/colorpicker/css/colorpicker.css');
         wp_enqueue_style('admin_styles', get_template_directory_uri().'/lib/admin/admin_styles.css');


}

add_action('admin_enqueue_scripts', 'my_admin_scripts');
add_action('admin_enqueue_scripts', 'my_admin_styles');
?>