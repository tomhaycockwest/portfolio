<?php

function advanced_settings_page() { ?>

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

                         <h2><?php _e('Advanced settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>

                    <?php
                    do_settings_fields('advanced_settings','advanced_section');
                    settings_fields('advanced_setting');
                    ?>

                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','advanced_settings');
function advanced_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('advanced_setting','custom_css');
         register_setting('advanced_setting','custom_js');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'advanced_section', '', 'advanced_section_callback', 'advanced_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'custom_css', '', 'custom_css_callback', 'advanced_settings', 'advanced_section' );
         add_settings_field( 'custom_js', '', 'custom_js_callback', 'advanced_settings', 'advanced_section' );
         }

/*
CALLBACKS
*/
function advanced_section_callback() {}
require_once('advanced_field_callbacks.php');

?>