<?php
//theme_settings_page ( display general settings )
function theme_settings_page() { ?>

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
                    
                         <h2><?php _e('General Settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('theme_settings','general_section');
                    settings_fields('general_settings');
                    ?>

                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php


}

add_action('admin_init','general_settings');
function general_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('general_settings','logo_margin');
         register_setting('general_settings','logo_url');
         register_setting('general_settings','logo_width');
         register_setting('general_settings','logo_height');
         register_setting('general_settings','logo_alt');
         register_setting('general_settings','admin_logo');
         register_setting('general_settings','shortcut_icon');
         register_setting('general_settings','touch_icon1');
         register_setting('general_settings','copyright_text');
         register_setting('general_settings','error_page_title');
         register_setting('general_settings','error_page_content');


         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'general_section', '', 'general_section_callback', 'theme_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'logo_margin', '', 'logo_margin_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'logo_url', '', 'logo_url_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'logo_width', '', 'logo_width_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'logo_height', '', 'logo_height_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'logo_alt', '', 'logo_alt_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'admin_logo', '', 'admin_logo_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'shortcut_icon', '', 'shortcut_icon_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'touch_icon1', '', 'touch_icon1_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'copyright_text', '', 'copyright_text_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'error_page_title', '', 'error_page_title_callback', 'theme_settings', 'general_section' );
         add_settings_field( 'error_page_content', '', 'error_page_content_callback', 'theme_settings', 'general_section' );


}//END: general_settings()

/*
CALLBACKS
*/
function general_section_callback() {}
require_once('general_field_callbacks.php');

?>