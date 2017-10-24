<?php

  $to = get_option('contact_email');
  $subject = get_option('contact_subject');
  $message = "From: $name\nEmail address: $email\nMessage:\n\n$comments\n";
  $headers = "From:" . $name;
  $error_message = __('We are really sorry, but something went wrong. Please try to send us an email via your email account.','me-3-9-3');

  if( !wp_mail( $to, $subject, $message, $headers ) )
   {
   echo "
        <div class=\"error\">
             <p>
             $error_message
             </p>
        </div>";

   }
   else {
        echo "
        <div class=\"success\">
             <p>
             $thank_you
             </p>
        </div>";
        }
        
?>