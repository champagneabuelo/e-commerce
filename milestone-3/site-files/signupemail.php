<?php
require_once('../class.phpmailer.php');

function sendConfirmTo($name, $email) {
	$mail = new PHPMailer();

	// TODO add the confirmation body of email here

	$mail->isSMTP();
	$mail->SMTPDebug = 2; // TODO set to zero once debugging is done
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "hoosridingemail@gmail.com";
	$mail->Password = "ecommerce1";
	$mail->addAddress($email, $name);
	
	$mail->Subject = 'PHPMailer Test';

	if (!mail-send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message Sent!";
	}	
}


?>
