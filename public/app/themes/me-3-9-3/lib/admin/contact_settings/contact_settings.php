<?php

function contact_settings_page() { ?>

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
                    
                         <h2><?php _e('Contact information','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>

                    <?php
                    do_settings_fields('contact_settings','contact_section');
                    settings_fields('contact_setting');
                    //do_settings_sections('contact_settings');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','contact_settings');
function contact_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('contact_setting','contact_email');
         register_setting('contact_setting','contact_text');
         register_setting('contact_setting','contact_address');
         register_setting('contact_setting','contact_phone');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'contact_section', __('Contact information','me-3-9-3'), 'contact_section_callback', 'contact_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'contact_text', '', 'contact_text_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_address', '', 'contact_address_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_phone', '', 'contact_phone_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_email', '', 'email_address_callback', 'contact_settings', 'contact_section' );
         }

/*
CALLBACKS
*/
require_once('contact_section_callbacks.php');
require_once('contact_field_callbacks.php');
?>