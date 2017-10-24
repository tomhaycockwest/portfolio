<?php

  require_once(ABSPATH . WPINC . '/class-phpmailer.php'); //call php mailer
  $mail = new PHPMailer();

  $mail->setFrom($email, $name);
  
  $address = get_option('contact_form_email');
  $mail->addAddress($address, 'Contact Form');
  
  $mail->Subject = get_option('contact_subject');
  $mail->Body    = "From: $name\nEmail address: $email\nMessage:\n\n$comments\n";
  
  if(!$mail->send()) {
     echo "
          <div class=\"error\">
               <p>
               Mailer Error:   $mail->ErrorInfo
               </p>
          </div>";
  
     }
     else echo "
          <div class=\"success\">
               <p>
               $thank_you
               </p>
          </div>";
          
  $mail->ClearAddresses();

?>