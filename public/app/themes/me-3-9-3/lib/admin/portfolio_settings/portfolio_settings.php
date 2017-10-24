<?php

function portfolio_settings_page() { ?>

    <div class="options-wrap">

         <?php require_once('options_menu.php'); ?>
         
         <div class="options">

              <form method="post" action="options.php">
                    
                    <?php if ( isset($_GET['settings-updated']) ) : ?>
                    <div class="updated below-h2">
                         <p>
                         <?php _e('Options updated succesfully!','me-3-9-3'); ?>
                         </p>
                    </div>
                    <?php endif; ?>

                    <div class="options_header">
                    
                         <h2><?php _e('Portfolio settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('portfolio_settings','portfolio_section');
                    settings_fields('portfolio_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','portfolio_settings');
function portfolio_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('portfolio_setting','portfolio_thumbnail_shape');
         register_setting('portfolio_setting','portfolio_more_info');
         register_setting('portfolio_setting','portfolio_link');
         register_setting('portfolio_setting','portfolio_lightbox');
         register_setting('portfolio_setting','all_projects');
         register_setting('portfolio_setting','disable_filter');
         register_setting('portfolio_setting','disable_icon_link');
         register_setting('portfolio_setting','disable_overlay');
         register_setting('portfolio_setting','show_description');
         register_setting('portfolio_setting','auto_greyscale');
         register_setting('portfolio_setting','item_layout');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'portfolio_section', '', 'portfolio_section_callback', 'portfolio_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'portfolio_thumbnail_shape', '', 'portfolio_thumbnail_shape_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'portfolio_more_info', '', 'portfolio_more_info_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'portfolio_link', '', 'portfolio_link_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'portfolio_lightbox', '', 'portfolio_lightbox_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'all_projects', '', 'all_projects_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'disable_filter', '', 'disable_filter_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'disable_icon_link', '', 'disable_icon_link_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'disable_overlay', '', 'disable_overlay_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'show_description', '', 'show_description_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'auto_grayscale', '', 'auto_greyscale_callback', 'portfolio_settings', 'portfolio_section' );
         add_settings_field( 'item_layout', '', 'item_layout_callback', 'portfolio_settings', 'portfolio_section' );
         }

/*
CALLBACKS
*/
function portfolio_section_callback() {}
require_once('portfolio_field_callbacks.php');

?>