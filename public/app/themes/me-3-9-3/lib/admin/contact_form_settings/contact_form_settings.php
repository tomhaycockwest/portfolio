<?php

function contact_form_settings_page() {
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
                    
                         <h2><?php _e('Contact form settings','me-3-9-3'); ?></h2>
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />

                    <div class="clear"></div>
                    </div>
                    <?php

                    do_settings_fields('contact_form_settings','contact_form_section');
                    settings_fields('contact_form_setting');
                    //do_settings_sections('contact_form_settings');

                    ?>
                    
                    <div class="options_footer">
                         <input type="submit" class="button-primary" value="<?php _e('Save Changes','me-3-9-3'); ?>" style="float: right;" />
                    </div>

               </form>

         </div>

    </div>

    <?php

}

add_action('admin_init','contact_form_settings');
function contact_form_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('contact_form_setting','contact_form_email');
         register_setting('contact_form_setting','contact_form_name');
         register_setting('contact_form_setting','contact_form_email_label');
         register_setting('contact_form_setting','contact_form_message_label');
         register_setting('contact_form_setting','send_button_label');
         register_setting('contact_form_setting','missing_name');
         register_setting('contact_form_setting','missing_mail');
         register_setting('contact_form_setting','invalid_mail');
         register_setting('contact_form_setting','missing_message');
         register_setting('contact_form_setting','error_message_color');
         register_setting('contact_form_setting','contact_subject');
         register_setting('contact_form_setting','thank_you_text');
         register_setting('contact_form_setting','disable_phpmailer');
         register_setting('contact_form_setting','contactform7_shortcode');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'contact_form_section', '', 'contact_form_section_callback', 'contact_form_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'contact_form_email', '', 'form_email_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'contact_form_name', '', 'contact_form_name_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'contact_form_email_label', '', 'contact_form_email_label_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'contact_form_message_label', '', 'contact_form_message_label_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'send_button_label', '', 'send_button_label_callback', 'contact_form_settings', 'contact_form_section');

         add_settings_field( 'missing_name', '', 'missing_name_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'missing_mail', '', 'missing_mail_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'invalid_mail', '', 'invalid_mail_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'missing_message', '', 'missing_message_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'error_message_color', '', 'error_message_color_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'contact_subject', '', 'contact_subject_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'thank_you_text', '', 'thank_you_text_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'disable_phpmailer', '', 'disable_phpmailer_callback', 'contact_form_settings', 'contact_form_section');
         add_settings_field( 'contactform7_shortcode', '', 'contactform7_shortcode_callback', 'contact_form_settings', 'contact_form_section');
         }


require_once('contact_form_section_callbacks.php');
require_once('contact_form_field_callbacks.php');

?>