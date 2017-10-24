<?php

//Contact email
function form_email_callback() {
      $options = get_option('contact_form_email');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Email Address','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_form_email' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-form-email-tooltip" title="';
                _e('This email address will be the destination of the messages.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Name label (contact form)
function contact_form_name_callback() {
      $default_value = esc_attr__('Your Name','me-3-9-3');
      $options = get_option('contact_form_name', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Name label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_form_name' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-form-name-tooltip" title="';
                _e('The default value of the name field in the contact form. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Email label (contact form)
function contact_form_email_label_callback() {
      $default_value = esc_attr__('Your Email Address','me-3-9-3');
      $options = get_option('contact_form_email_label', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Email label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_form_email_label' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-form-email-label-tooltip" title="';
                _e('The default value of the email field in the contact form. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Message label (contact form)
function contact_form_message_label_callback() {
      $default_value = esc_attr__('Message','me-3-9-3');
      $options = get_option('contact_form_message_label', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Message label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_form_message_label' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-form-message-label-tooltip" title="';
                _e('The default value of the message textarea in the contact form. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Send button label
function send_button_label_callback() {
      $default_value = esc_attr__('OK','me-3-9-3');
      $options = get_option('send_button_label', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Send button label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='send_button_label' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-form-button-label-tooltip" title="';
                _e('The default label of the contact form button. Short values are recommended for the sake of the circle shape (for example: OK, GO ).','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Missing name (contact form)
function missing_name_callback() {
      $default_value = esc_attr__('What is your name?','me-3-9-3');
      $options = get_option('missing_name', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing name warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='missing_name' value='$options' size='60' />";
                echo '<a href="" class="question" id="missing-name-tooltip" title="';
                _e('If the user does not fill the name field before submit the form, this message will be shown. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Missing mail (contact form)
function missing_mail_callback() {
      $default_value = esc_attr__('What is your email address?','me-3-9-3');
      $options = get_option('missing_mail', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing email warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='missing_mail' value='$options' size='60' />";
                echo '<a href="" class="question" id="missing-mail-tooltip" title="';
                _e('If the user does not fill the email field before submit the form, this message will be shown. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Invalid mail (contact form)
function invalid_mail_callback() {
      $default_value = esc_attr__('Oh no! Invalid email address!','me-3-9-3');
      $options = get_option('invalid_mail', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Invalid email warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='invalid_mail' value='$options' size='60' />";
                echo '<a href="" class="question" id="invalid-mail-tooltip" title="';
                _e('If the user are trying to submit the form with an invalid email address, this message will be shown. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Missing message (contact form)
function missing_message_callback() {
      $default_value = esc_attr__('Do you wanna say sumthin?','me-3-9-3');
      $options = get_option('missing_message', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing message warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='missing_message' value='$options' size='60' />";
                echo '<a href="" class="question" id="missing-message-tooltip" title="';
                _e('If the user does not fill the message textarea before submit the form, this message will be shown. Required by the validation process.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Error message color
function error_message_color_callback() {
      $options = get_option('error_message_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Error message color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='error_message_color' type='text' size='30' name='error_message_color' value='#990000' class='color-input' />";
                         echo '<span class="color_preview" style="background: #990000;"></span>';
                      }
                      if ($options){
                         echo "<input id='error_message_color' type='text' size='30' name='error_message_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' style='background: $options'></span>";
                      }
                      echo "<a id='error_message_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
                      echo '<a href="" class="question" id="error-color-tooltip" title="';
                      _e('You can specify a custom color for the error messages.','me-3-9-3');
                      echo '"></a>';
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#error_message_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#error_message_color').val('#' + hex);
                         jQuery('span.color_preview').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Contact subject
function contact_subject_callback() {
      $default_value = esc_attr__('Contact Form Message','me-3-9-3');
      $options = get_option('contact_subject', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Email subject','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_subject' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-subject-tooltip" title="';
                _e('The subject of the emails sent via your contact form. Required by the contact form script.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Thank you message
function thank_you_text_callback() {
      $default_value = esc_attr__('Wow! The form seems to work!','me-3-9-3');
      $options = get_option('thank_you_text', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Thank you message','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='thank_you_text' value='$options' size='60' />";
                echo '<a href="" class="question" id="thank-you-tooltip" title="';
                _e('If the user sent the message succesfully, the form elements will disappear and this message will be shown. Required by the contact form script.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable php mailer
function disable_phpmailer_callback() {
     $options = checked(1, get_option('disable_phpmailer'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Disable PhpMailer','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_phpmailer" style="margin-left: 50px;" name="disable_phpmailer" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-phpmailer-tooltip" title="';
                _e('If you do not receive emails via the contact form, try to disable PhpMailer. PhpMailer is a robust, reliable and widely used mail sending php class, but some servers does not support it. If you disable PhpMailer, the theme will use the classic mail() function instead.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Contact form 7 shortcode
function contactform7_shortcode_callback() {
      $options = get_option('contactform7_shortcode');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('ContactForm 7 shortcode','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contactform7_shortcode' value='$options' size='60' />";
                echo '<a href="" class="question" id="contactform7-shortcode-tooltip" title="';
                _e('If you want to replace the default form with a contact form 7 form, paste the shortecode of the form here.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>