<?php
if ( !isset( $content_width ) ) { $content_width = 960; }
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
add_theme_support( 'automatic-feed-links' );
add_theme_support('title-tag');

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

if ( function_exists('add_theme_support') )
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 200 );
}

if ( get_option('admin_logo') ) :
   function custom_login_logo() {
         echo '<style  type="text/css"> .login h1 a {  width: 320px; height: 180px; margin-bottom: 15px; background-image:url(' . get_option('admin_logo') . ')  !important; background-size: auto; } </style>';
   }
   add_action('login_head','custom_login_logo');
endif;

add_filter( 'the_password_form', 'custom_password_form' );
function custom_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    echo '<div class="password_container">';
         echo '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">';
              echo '<p class="password_protected_comments">' . __( 'This post is password protected. Please enter the password to view the post.', 'me-3-9-3' ) . '</p>';
              echo '<label class="pass-label" for="' . $label . '">';echo __('PASSWORD:','me-3-9-3');echo '</label>';
              echo '<input name="post_password" id="' . $label . '" type="password" class="password_protected_password" size="20" />';
              echo '<input type="submit" name="Submit" class="button password_protected_button" value="' . esc_attr__( 'Submit', 'me-3-9-3' ) . '" />';
         echo '</form>';
    echo '</div>';
}

if ( is_admin_bar_showing() ) {

      function mtheme_link_to_stylesheet() {
      ?>
      <style type="text/css">
      #wpadminbar { z-index: 1000000001; }
      div#hidden_menu { top: 32px; }
      </style>
      <?php
      }
      add_action('wp_head', 'mtheme_link_to_stylesheet');

}

?>