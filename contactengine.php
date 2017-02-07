<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

header('Content-Type: application/json');

$mail = new PHPMailer();

$mail->CharSet = "UTF8";

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

$mail->setFrom($email, $name);
$mail->addAddress('francois@witify.io');
$mail->addReplyTo('francois@witify.io');

$mail->Subject = 'Demande d’informations Jeffery Condos';

// Prepare email body text
$body = "";

$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n";

$body .= "Message: ";
$body .= $message;
$body .= "\n";

$mail->Body = $body;

if(!$mail->send()) {
	echo json_encode(array('success' => false));
    http_response_code(500);
    exit();
} else {
	echo json_encode(array('success' => true));
    http_response_code(200);
    exit();
}