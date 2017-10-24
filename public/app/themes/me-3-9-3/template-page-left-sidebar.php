<?php
/*
   Template Name: Page with left sidebar
*/
get_header();
require_once(ME_MISC . '/multi_page_navigation.php'); 
?>


<!--* CONTENT *-->
<div id="content" class="page_content">

     <!-- SIDEBAR -->
     <div id="sidebar-left">

          <!-- Recent posts -->
          <?php dynamic_sidebar('Sidebar'); ?>

     </div>
     <!-- END SIDEBAR -->

     <!-- MAIN CONTENT -->
     <div id="main">

          <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
          
                <?php if ( is_archive() || is_search() ) : ?>
                      <?php the_excerpt(); ?>
                <?php else : ?>
                      <?php the_content(); ?>
                <?php endif; ?>

          <?php endwhile; ?>

          <?php else : ?>
          
                <h1><?php _e('Not Found','me-3-9-3'); ?></h1>

                <p>
                   <?php _e('Sorry, but there are no results for the requested archive.','me-3-9-3'); ?>
                </p>

          <?php endif; ?>
          
          <?php $args = array(
  	        'before'           => '<div class="wp-link-pages"><span class="current-page">' . __('Pages:','me-3-9-3') . '</span>',
  	        'after'            => '<div class="clear"></div></div>',
  	        'link_before'      => '<span>',
  	        'link_after'       => '</span>',
  	        'next_or_number'   => 'number',
  	        'nextpagelink'     => __('Next page','me-3-9-3'),
  	        'previouspagelink' => __('Previous page','me-3-9-3'),
  	        'pagelink'         => '%',
  	        'echo'             => 1
           ); ?>
           <?php wp_link_pages( $args ); ?>

     </div>
     <!-- END: MAIN CONTENT -->

<div class="clear"></div>

<?php get_footer(); ?>