<?php
	$to      = 'toptoursinitaly@yahoo.com';
	$subject = 'Your inquiry to Top Tours In Italy by Nick Solipaca';

	// keys from Google reCaptcha https://www.google.com/recaptcha/admin
	$sitekey = '6Lchih8TAAAAAErEzhx0sj0YVlMy6sSGN9Cx8Zad';
	$secretkey = '6Lchih8TAAAAAFmVnMyhTUWIMk7VcIPnGhLhxIGW';

	if (isset($_POST['redirect']) and !empty($_POST['redirect'])) $redirect = $_POST['redirect'];
	else $redirect = '/';

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name;
		$email;
		$message;
		$captcha;
		$result;

		if(isset($_POST['email'])) $email = $_POST['email'];
		if(isset($_POST['name'])) $message = "From: ".$_POST['name']."\r\n";
		if(isset($_POST['message'])) $message .= $_POST['message'];
		if(isset($_POST['phone'])) $message .= "\r\nPhone: ".$_POST['phone'];
		if(isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
	    
	    if (empty($email)) {
	    	$result = "ERROR: E-Mail field cannot be empty, please try again.";
	    } elseif (empty($_POST['name'])) {
	    	$result = "ERROR: Name field cannot be empty, please try again.";
	    } elseif (empty($message)) {
	    	$result = "ERROR: Message field cannot be empty, please try again.";
	    }

	    if(!$captcha) {
        	$result = 'ERROR: Please wait until the captcha protection gives you a check mark.';
	    }

		$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));

		if( $response->success==false ) {
			/* lets set the error message for the alert... */
			if (empty($result)) {
				$result = 'ERROR: Please click on the anti-spam checkbox and try again.';
			}
        } elseif (empty($result)) {
			/* the email to you */
			$headers = 
					'From: '.$to.'' . "\r\n" .
                	'Reply-To: '.$email.'' . "\r\n" .
                	'X-Mailer: PHP/' . phpversion();
            		mail($to, $subject, $message, $headers);
			/* the copy of the email to the *client* */
			$headers = 'From: '.$email.'' . "\r\n" .
				'Reply-To: '.$to.'' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
			mail($email, 'COPY - '. $subject, $message, $headers);
			/* lets set the success message for the alert... */
			$result = 'Thank you! Your email has been sent. We will get back to you as soon as possible!';
        }
	}
	if (empty($result)) $result = 'Something went wrong while processing your request, please try again.';
	$redirect = 'Location: '.$redirect.'?message='.urlencode($result);
	header($redirect);
?>