<?php

function style_settings_page() { ?>
  
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

                         <h2><?php _e('Style options','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <div class="options_description">
                         <?php _e('Here you can control the font families, font sizes and the colors of your website.
                         If you would like to try the different colors and fonts in action, just visit the
                         <a href="http://magna-themes.com/demos/wordpress/me/" target="_blank">demo site.</a> I believe
                         you will understand these options without explanation, and hope you will enjoy the customization.','me-3-9-3'); ?>
                    </div>
                    
                    <?php
                    do_settings_fields('style_settings','general_style_section');
                    settings_fields('styles');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','style_settings');
function style_settings() {
         /*
         REGISTER OPTIONS
         */
         register_setting('styles','body_font');
         register_setting('styles','body_font_size');
         register_setting('styles','body_font_color');
         register_setting('styles','letter_spacing');
         register_setting('styles','link_color');
         register_setting('styles','menu_font');
         register_setting('styles','menu_font_size');
         register_setting('styles','menu_font_color');
         register_setting('styles','hidden_menu_background');
         register_setting('styles','hidden_menu_color');
         register_setting('styles','background_color');
         register_setting('styles','background_pattern');
         register_setting('styles','background_image');
         register_setting('styles','line_color');
         register_setting('styles','heading_font');
         register_setting('styles','heading_color');
         register_setting('styles','intro_font');
         register_setting('styles','intro_font_size');
         register_setting('styles','page_title_font');
         register_setting('styles','section_title_color');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'general_style_section', '', 'general_style_callback', 'style_settings' );
         
         /*
         DEFINE FIELDS
         */
         add_settings_field( 'body_font', '', 'body_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'body_font_size', '', 'body_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'body_color', '', 'body_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'letter_spacing', '', 'letter_spacing_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'link_color', '', 'link_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font', '', 'menu_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font_size', '', 'menu_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font_color', '', 'menu_font_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'hidden_menu_background', '', 'hidden_menu_background_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'hidden_menu_color', '', 'hidden_menu_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'background_color', '', 'background_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'background_pattern', '', 'background_pattern_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'background_image', '', 'background_image_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'line_color', '', 'line_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'heading_font', '', 'heading_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'heading_color', '', 'heading_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'intro_font', '', 'intro_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'intro_font_size', '', 'intro_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'page_title_font', '', 'page_title_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'section_title_color', '', 'section_title_color_callback', 'style_settings', 'general_style_section' );
}

function general_style_callback() {}
require_once('style_fields_callbacks.php');

?>