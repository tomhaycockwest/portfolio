<?php

function home_settings_page() { ?>

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
                    
                         <h2><?php _e('Home Settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('home_settings','home_section');
                    settings_fields('home_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','home_settings');
function home_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('home_setting','intro_text');
         register_setting('home_setting','home_video');
         register_setting('home_setting','section1_content');
         register_setting('home_setting','section2_content');
         register_setting('home_setting','section3_content');
         register_setting('home_setting','section4_content');
         register_setting('home_setting','section5_content');
         register_setting('home_setting','section6_content');
         register_setting('home_setting','section7_content');
         register_setting('home_setting','section8_content');
         register_setting('home_setting','section9_content');
         register_setting('home_setting','section10_content');
         register_setting('home_setting','portfolio_title');
         register_setting('home_setting','services_title');
         register_setting('home_setting','about_title');
         register_setting('home_setting','contact_title');
         register_setting('home_setting','text1_title');
         register_setting('home_setting','text1_content');
         register_setting('home_setting','text2_title');
         register_setting('home_setting','text2_content');
         register_setting('home_setting','text3_title');
         register_setting('home_setting','text3_content');
         register_setting('home_setting','text4_title');
         register_setting('home_setting','text4_content');
         register_setting('home_setting','text5_title');
         register_setting('home_setting','text5_content');
         register_setting('home_setting','white_space');
         register_setting('home_setting','preloader');


         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'home_section', '', 'home_section_callback', 'home_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'intro_text', '', 'intro_text_callback', 'home_settings', 'home_section' );
         add_settings_field( 'home_video', '', 'home_video_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section1_content', '', 'section1_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section2_content', '', 'section2_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section3_content', '', 'section3_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section4_content', '', 'section4_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section5_content', '', 'section5_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section6_content', '', 'section6_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section7_content', '', 'section7_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section8_content', '', 'section8_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section9_content', '', 'section9_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'section10_content', '', 'section10_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'portfolio_title', '', 'portfolio_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'services_title', '', 'services_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'about_title', '', 'about_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'contact_title', '', 'contact_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text1_title', '', 'text1_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text1_content', '', 'text1_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text2_title', '', 'text2_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text2_content', '', 'text2_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text3_title', '', 'text3_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text3_content', '', 'text3_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text4_title', '', 'text4_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text4_content', '', 'text4_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text5_title', '', 'text5_title_callback', 'home_settings', 'home_section' );
         add_settings_field( 'text5_content', '', 'text5_content_callback', 'home_settings', 'home_section' );
         add_settings_field( 'white_space', '', 'white_space_callback', 'home_settings', 'home_section' );
         add_settings_field( 'preloader', '', 'preloader_callback', 'home_settings', 'home_section' );
         }

/*
CALLBACKS
*/

function home_section_callback() {}
require_once('home_field_callbacks.php');

?>