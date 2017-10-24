<?php

//Contact email
function email_address_callback() {
      $default_value = esc_attr__('info@magna-themes.com','me-3-9-3');
      $options = get_option('contact_email', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Email Address','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_email' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-email-tooltip" title="';
                _e('This email address will be shown on the contact page / section, but will not be the destination of the contact form messages!','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Contact text
function contact_text_callback() {
      $default_value = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sapien non nunc semper tincidunt sed id lacus.','me-3-9-3');
      $options = get_option('contact_text', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('General information','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'contact_text',
                    'media_buttons' => false,
                    'teeny'         => false,
                    'tinymce'       => false,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link' )
                );
                wp_editor( $options, 'contacteditor', $editor_settings );
                //echo "<textarea name='contact_text' cols='62' rows='2'>$options</textarea>";
                echo '<a href="" class="question" id="contact-text-tooltip" title="';
                _e('If you would like to write some important information assigned to your visitors, you can do it here. This text will be shown on the right side of the contact section, above of your email address.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Contact address
function contact_address_callback() {
      $default_value = esc_attr__('2000 Fashion Show Dr., Las Vegas, 89109 NV','me-3-9-3');
      $options = get_option('contact_address', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Address','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_address' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-address-tooltip" title="';
                _e('The address where your potential customers can reach you. Will be shown under additional information.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Contact Phone
function contact_phone_callback() {
      $default_value = esc_attr__('+01 - 000 - 0000','me-3-9-3');
      $options = get_option('contact_phone', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Your telephone number','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_phone' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-phone-tooltip" title="';
                _e('This text field is borned to store your telephone number.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

/*


*/

?>