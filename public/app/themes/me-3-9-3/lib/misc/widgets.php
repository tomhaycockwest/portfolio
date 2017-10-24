<?php

/* REGISTER SIDEBAR
==================================*/
add_action( 'widgets_init', 'me_widgets_init' );
function me_widgets_init() {
      $args = array(
          	'name'          => __('Sidebar','me-3-9-3'),
          	'id'            => 'me-sidebar',
          	'before_widget' => '<div class="sidebar_widget">',
          	'after_widget'  => '</div>',
          	'before_title'  => '<h3 class="widgettitle">',
          	'after_title'   => '</h3>' );
      register_sidebar( $args );
}

?>