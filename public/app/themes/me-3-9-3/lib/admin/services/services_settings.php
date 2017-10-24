<?php

function services_settings_page() { ?>

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
                    
                         <h2><?php _e('Services','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('services_settings','services_section');
                    settings_fields('services_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','services_settings');
function services_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('services_setting','services_display');
         register_setting('services_setting','services_intro');
         register_setting('services_setting','services_background');


         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'services_section', '', 'services_section_callback', 'services_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'services_intro', '', 'services_intro_callback', 'services_settings', 'services_section' );
         add_settings_field( 'services_display', '', 'services_display_callback', 'services_settings', 'services_section' );
         add_settings_field( 'services_background', '', 'services_background_callback', 'services_settings', 'services_section' );
         }

/*
CALLBACKS
*/
function services_section_callback(){}
require_once('services_field_callbacks.php');

?>