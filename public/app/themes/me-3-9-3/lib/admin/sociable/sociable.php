<?php

function sociable_settings_page() { ?>

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
                    
                         <h2><?php _e('Sociable','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <div class="options_description">
                    <?php _e('You can edit your social media profiles here. Every social media icon based
                    on the following logic: there are an url and a tooltip text assigned to the same social icon. 
                    If you fill the url, the inbuilt icon will be shown as link. If you leave the url field empty, 
                    the social icon stays hidden. The url must be a valid url ( don`t forget the http:// )!','me-3-9-3'); ?>
                    </div>
                    
                    <?php
                    do_settings_fields('sociable_settings','sociable_section');
                    settings_fields('sociable_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','sociable_settings');
function sociable_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('sociable_setting','facebook_url');
         register_setting('sociable_setting','facebook_tooltip');
         register_setting('sociable_setting','instagram_url');
         register_setting('sociable_setting','instagram_tooltip');
         register_setting('sociable_setting','twitter_url');
         register_setting('sociable_setting','twitter_tooltip');
         register_setting('sociable_setting','rss_url');
         register_setting('sociable_setting','rss_tooltip');
         register_setting('sociable_setting','dribble_url');
         register_setting('sociable_setting','dribble_tooltip');
         register_setting('sociable_setting','youtube_url');
         register_setting('sociable_setting','youtube_tooltip');
         register_setting('sociable_setting','vimeo_url');
         register_setting('sociable_setting','vimeo_tooltip');
         register_setting('sociable_setting','linkedin_url');
         register_setting('sociable_setting','linkedin_tooltip');
         register_setting('sociable_setting','deviant_url');
         register_setting('sociable_setting','deviant_tooltip');
         register_setting('sociable_setting','tumblr_url');
         register_setting('sociable_setting','tumblr_tooltip');
         register_setting('sociable_setting','pinterest_url');
         register_setting('sociable_setting','pinterest_tooltip');
         register_setting('sociable_setting','google_url');
         register_setting('sociable_setting','google_tooltip');
         register_setting('sociable_setting','soundcloud_url');
         register_setting('sociable_setting','soundcloud_tooltip');
         register_setting('sociable_setting','github_url');
         register_setting('sociable_setting','github_tooltip');
         register_setting('sociable_setting','flickr_url');
         register_setting('sociable_setting','flickr_tooltip');
         register_setting('sociable_setting','behance_url');
         register_setting('sociable_setting','behance_tooltip');
         register_setting('sociable_setting','skype_address');
         register_setting('sociable_setting','skype_tooltip');
         register_setting('sociable_setting','skype_button');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'sociable_section', __('Sociable','me-3-9-3'), 'sociable_section_callback', 'sociable_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'facebook_url', '', 'facebook_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'facebook_tooltip', '', 'facebook_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'instagram_url', '', 'instagram_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'instagram_tooltip', '', 'instagram_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'twitter_url', '', 'twitter_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'twitter_tooltip', '', 'twitter_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'rss_url', '', 'rss_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'rss_tooltip', '', 'rss_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'dribble_url', '', 'dribble_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'dribble_tooltip', '', 'dribble_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'youtube_url', '', 'youtube_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'youtube_tooltip', '', 'youtube_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'vimeo_url', '', 'vimeo_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'vimeo_tooltip', '', 'vimeo_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'linkedin_url', '', 'linkedin_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'linkedin_tooltip', '', 'linkedin_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'deviant_url', '', 'deviant_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'deviant_tooltip', '', 'deviant_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'tumblr_url', '', 'tumblr_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'tumblr_tooltip', '', 'tumblr_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'pinterest_url', '', 'pinterest_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'pinterest_tooltip', '', 'pinterest_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'google_url', '', 'google_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'google_tooltip', '', 'google_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'soundcloud_url', '', 'soundcloud_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'soundcloud_tooltip', '', 'soundcloud_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'github_url', '', 'github_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'github_tooltip', '', 'github_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'flickr_url', '', 'flickr_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'flickr_tooltip', '', 'flickr_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'behance_url', '', 'behance_url_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'behance_tooltip', '', 'behance_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'skype_address', '', 'skype_address_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'skype_tooltip', '', 'skype_tooltip_callback', 'sociable_settings', 'sociable_section' );
         add_settings_field( 'skype_button', '', 'skype_button_callback', 'sociable_settings', 'sociable_section' );
         }

/*
CALLBACKS
*/
require_once('sociable_section_callback.php');
require_once('sociable_field_callbacks.php');

?>