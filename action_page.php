<?php
		    $email = $_GET("email");
		    $to      = email;
		    $subject = 'Teen Entrepreneurship Webinar - Confirmation';
		    $message = 'You\'re all set! \n \n You are signed up for the Teen Entrepreneurship Webinar. We will send you a proper ZOOM code when the deadline comes up.';
		    $headers = 'From: BlissByBailee'       . "\r\n" .
				 'Reply-To: ' + email + . "\r\n" .
				 'X-Mailer: PHP/' . phpversion();

		    mail($to, $subject, $message, $headers);
	header('Location: confirmation.html');
?>
