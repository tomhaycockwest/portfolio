<?php
/* 
   Template Name: Portfolio page
*/ 
?>
  
    <?php get_header(); ?>
    
          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>
          
     </div>
     <!--* END HEADER *-->
  
    <!--* PORTFOLIO *-->
    <div id="portfolio">

         <!-- FILTER -->
         <div id="filter_wrapper">

              <?php if ( !checked(1, get_option('disable_filter'), false) ) : ?>
              <ul id="portfolioFilter">

                   <?php if ( !get_option('all_projects') ) : ?>
                   <li class="filter" data-filter="all"><?php _e('All projects','me-3-9-3'); ?></li>
                   <?php else: ?>
                   <li class="filter" data-filter="all"><?php echo get_option('all_projects'); ?></li>
                   <?php endif; ?>

                   <?php
                   $terms = get_terms( 'filter' );
                   if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                       foreach ( $terms as $term ) {
                         echo '<li class="filter" data-filter="'.  $term->slug .'" data-description="'. $term->description .'">' . $term->name . '</li>';
                          
                       }
                   }
                   ?>
                   
              </ul>
              <?php endif; ?>

         </div>
         <div class="clear"></div>

         <!-- CONTAINER: ITEM DETAILS -->
         <?php if ( get_option('item_layout') == "full" ) : ?>
         <div id="item_container"></div>
         <div id="portfolio_loading"></div>
         <?php endif; ?>
         
         <?php if ( !get_option('item_layout') || get_option('item_layout') == "above" ) : ?>
         <div id="item_container2"></div>
         <div id="portfolio_loading2"></div>
         <?php endif; ?>

         <!-- CONTAINER: PORTFOLIO ITEMS -->
         <div id="portfolio_items">

              <?php
              $disable_icons = checked(1, get_option('disable_icon_link'), false);
              $disable_overlay = checked(1, get_option('disable_overlay'), false);
              $thumbnail_shape = get_option('portfolio_thumbnail_shape');
              ?>

              <div id="portfolio_items_container">
                    <ul id="Portfolio-Grid" <?php if ( $thumbnail_shape ) { echo 'class="'.$thumbnail_shape.'"'; } ?> <?php if ( !$thumbnail_shape ) { echo 'class="circle"'; } ?> >
      
                        <?php
      
                              if ( $disable_icons && $disable_overlay ) { require_once(ME_LIB . '/portfolio/portfolio_circle2.php'); }
                              if ( $disable_icons && !$disable_overlay ) { require_once(ME_LIB . '/portfolio/portfolio_circle3.php'); }
                              if ( !$disable_icons && $disable_overlay ) { require_once(ME_LIB . '/portfolio/portfolio_circle2.php'); }
                              if ( !$disable_icons && !$disable_overlay ) { require_once(ME_LIB . '/portfolio/portfolio_circle1.php'); }
      
                        ?>
      
                    </ul>
              </div>

         <div class="clear"></div>
         </div>
         <!-- END CONTAINER: PORTFOLIO ITEMS -->

    </div>
    <!--* END: PORTFOLIO *-->
  
<?php  get_footer(); ?>