<?php

function slider_settings_page() {
?>

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

                         <h2><?php _e('Slider','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('slider_settings','slider_section');
                    settings_fields('slider_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php


}

add_action('admin_init','slider_settings');
function slider_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('slider_setting','slider_width');
         register_setting('slider_setting','slider_animation');
         register_setting('slider_setting','slider_direction');
         register_setting('slider_setting','slider_slideshow');
         register_setting('slider_setting','slider_speed');
         register_setting('slider_setting','slider_animation_speed');
         register_setting('slider_setting','slider_direction_nav');
         register_setting('slider_setting','slider_control_nav');
         register_setting('slider_setting','slider_keyboard_nav');
         register_setting('slider_setting','slider_mousewheel');
         register_setting('slider_setting','slider_randomize');
         register_setting('slider_setting','slider_start');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'slider_section', __('Slider settings','me-3-9-3'), 'slider_section_callback', 'slider_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'slider_width', '', 'slider_width_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_animation', '', 'slider_animation_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_direction', '', 'slider_direction_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_slideshow', '', 'slider_slideshow_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_speed', '', 'slider_speed_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_animation_speed', '', 'slider_animation_speed_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_direction_nav', '', 'slider_direction_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_control_nav', '', 'slider_control_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_keyboard_nav', '', 'slider_keyboard_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_mousewheel', '', 'slider_mousewheel_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_randomize', '', 'slider_randomize_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_start', '', 'slider_start_callback', 'slider_settings', 'slider_section' );

}

function slider_section_callback() {}
require_once('slider_field_callbacks.php');

?>