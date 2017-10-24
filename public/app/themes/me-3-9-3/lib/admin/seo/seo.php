<?php

function seo_settings_page() { ?>

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
                    
                         <h2><?php _e('SEO Settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('seo_settings','seo_section');
                    settings_fields('seo_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','seo_settings');
function seo_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('seo_setting','meta_keyword');
         register_setting('seo_setting','meta_description');


         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'seo_section', '', 'seo_section_callback', 'seo_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'meta_keyword', '', 'meta_keyword_callback', 'seo_settings', 'seo_section' );
         add_settings_field( 'meta_description', '', 'meta_description_callback', 'seo_settings', 'seo_section' );
         }

/*
CALLBACKS
*/
function seo_section_callback() {}
require_once('seo_field_callbacks.php');

?>