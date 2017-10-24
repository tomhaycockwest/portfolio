<?php

function send_contact_us_email() {
	// Find the contact us page
	$posts_query = new WP_Query(array(
		'post_type'  => 'page',
		'meta_key'   => '_wp_page_template',
		'meta_value' => 'template-contact-us.php'
	));
	// retrieve the first one from the posts object
	$post = array_shift($posts_query->posts);
	$redirect_url = '/' . $post->post_name;

	# validate captcha
	$captcha_secret = getenv('GOOGLE_RECAPTCHA_SECRET');
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$fields_string = '';
	$fields = array(
		'secret' => $captcha_secret,
		'response' => isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : ''
	);
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$result = curl_exec($ch);
	curl_close($ch);
	try {
		$json = json_decode($result);
		if (!$json->success){
			wp_safe_redirect($redirect_url. '?success=false');
			return;
		}
	} catch (Exception $e) {
		wp_safe_redirect($redirect_url. '?success=false');
		return;
	}

	$valid_submission = true;

	$required_keys = array(
		'_nonce' 				=> '',
		'first_name' 		=> 'First name is required',
		'last_name' 		=> 'Last name is required',
		'email' 				=> 'Email is required',
		'phone_number' 	=> 'Phone number is required',
		'message' 			=> 'Message required'
	);

	foreach($required_keys as $key => $value) {
		$exists = array_key_exists(
			$key,
			$_POST
		);

		if (!$exists) {
			$valid_submission = false;
		}
	}

	if (count($_POST) === 0) {
		$valid_submission = false;
	}

	if ($valid_submission) {
		$first_name 		= $_POST['first_name'];
		$last_name 			= $_POST['last_name'];
		$email 					= $_POST['email'];
		$phone_number 	= $_POST['phone_number'];
		$message 				= $_POST['message'];
		$_nonce 				= $_POST['_nonce'];

		$verify_nonce = wp_verify_nonce(
			$_nonce,
			'form-submit-contact-us'
		);

		if ($verify_nonce) {
			$email_body = 'First name: ' 		. $first_name 	. '<br>';
			$email_body .= 'Last Name: ' 		. $last_name 		. '<br>';
			$email_body .= 'Email: ' 				. $email 				. '<br>';
			$email_body .= 'Phone Number: ' . $phone_number . '<br>';
			$email_body .= 'Message: ' 			. $message 			. '<br>';

			$email_body_wrapped = wordwrap($email_body,70);

			$apiKey = getenv('SENDGRID_API_KEY');
			$toemail = getenv('SENDGRID_EMAIL');

			$subject = "New message from: keystone-games.com";

			$from = new SendGrid\Email(
				$first_name . $last_name, 
				$email
			);

			$to = new SendGrid\Email(
				"Webmaster at keystone-games.com", 
				$toemail
			);

			$content = new SendGrid\Content("text/html", $email_body_wrapped);

			$mail = new SendGrid\Mail($from, $subject, $to, $content);
			$sg = new \SendGrid($apiKey);

			$response = $sg->client->mail()->send()->post($mail);
			if ($response->statusCode() >= 400) {
				error_log(sprintf('Error sending email %s', $email));
			}

			# always redirect them to true here, as if there is an error it is a
			# system error and not their own error which wouldn't be resolved by
			# them retrying.
			wp_safe_redirect($redirect_url . '?success=true');
		}else{
			wp_safe_redirect($redirect_url . '?success=false');
		}
	}else{
		wp_safe_redirect($redirect_ural. '?success=false');
	}
}

add_action( 'admin_post_nopriv_contact_form', 'send_contact_us_email' );
add_action( 'admin_post_contact_form', 'send_contact_us_email' );

?>
