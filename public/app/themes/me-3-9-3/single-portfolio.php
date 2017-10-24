<?php
     
     get_header();
     require_once(ME_MISC . '/multi_page_navigation.php');

     global $custom_meta_fields, $post;

     $portfolio_layout = get_post_meta($post->ID, 'custom_layout', true);

     if ( !$portfolio_layout ) { require_once(ME_LIB . '/portfolio/portfolio_item1.php'); }
     if ( $portfolio_layout == "layout1" ) { require_once(ME_LIB . '/portfolio/portfolio_item1.php'); }
     if ( $portfolio_layout == "layout2" ) { require_once(ME_LIB . '/portfolio/portfolio_item2.php'); }
     if ( $portfolio_layout == "layout3" ) { require_once(ME_LIB . '/portfolio/portfolio_item3.php'); }
     if ( $portfolio_layout == "layout4" ) { require_once(ME_LIB . '/portfolio/portfolio_item4.php'); }
     
     get_footer();

?>