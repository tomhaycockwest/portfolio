<?php

function blog_settings_page() { ?>

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
                    
                         <h2><?php _e('Blog settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    
                    <?php
                    do_settings_fields('blog_settings','blog_section');
                    settings_fields('blog_setting');
                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

              </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','blog_settings');
function blog_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('blog_setting','blog_layout');
         register_setting('blog_setting','read_more');
         register_setting('blog_setting','disable_date');
         register_setting('blog_setting','disable_author');
         register_setting('blog_setting','disable_category');
         register_setting('blog_setting','disable_comments');
         register_setting('blog_setting','older_posts');
         register_setting('blog_setting','newer_posts');
         register_setting('blog_setting','commentform_name');
         register_setting('blog_setting','commentform_name_error');
         register_setting('blog_setting','commentform_email');
         register_setting('blog_setting','commentform_email_error');
         register_setting('blog_setting','commentform_email_invalid');
         register_setting('blog_setting','commentform_website');
         register_setting('blog_setting','commentform_message');
         register_setting('blog_setting','commentform_message_error');


         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'blog_section', '', 'blog_section_callback', 'blog_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'blog_layout', '', 'blog_layout_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'read_more', '', 'read_more_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'newer_posts', '', 'newer_posts_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'older_posts', '', 'older_posts_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'disable_date', '', 'disable_date_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'disable_author', '', 'disable_author_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'disable_category', '', 'disable_category_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'disable_comments', '', 'disable_comments_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_name', '', 'commentform_name_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_name_error', '', 'commentform_name_error_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_email', '', 'commentform_email_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_email_error', '', 'commentform_email_error_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_email_invalid', '', 'commentform_email_invalid_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_website', '', 'commentform_website_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_message', '', 'commentform_message_callback', 'blog_settings', 'blog_section' );
         add_settings_field( 'commentform_message_error', '', 'commentform_message_error_callback', 'blog_settings', 'blog_section' );
         }

/*
CALLBACKS
*/

function blog_section_callback() {}
require_once('blog_field_callbacks.php');

?>