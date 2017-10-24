<?php
get_header();
require_once(ME_MISC . '/multi_page_navigation.php'); ?>

     </div>
     <!--* END HEADER *-->

     <div id="error_page">
          
          <?php if ( get_option('error_page_title') ) : ?>
                <h2><?php echo esc_attr( get_option('error_page_title') ); ?></h2>
          <?php else : ?>
                <h2><?php _e('Something terrible happened','me-3-9-3'); ?></h2>
          <?php endif; ?>

          <?php if ( get_option('error_page_content') ) : ?>
                <p><?php echo esc_attr( get_option('error_page_content') ); ?></p>
          <?php else : ?>
                <p><?php _e('We are really sorry, but the page you requested cannot be found :(','me-3-9-3'); ?></p>
          <?php endif; ?>
     </div>

<?php get_footer(); ?>