<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->CharSet = "UTF-8";

$mail->setFrom(Trim(stripslashes($_POST['email'])), Trim(stripslashes($_POST['name'])));
$mail->addAddress('francois@witify.io', 'Francois Levesque');
$mail->addReplyTo('francois@witify.io', 'Francois Levesque');

$mail->isHTML(true);

$mail->Subject = 'Demande d’informations Jeffery Condos';

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

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
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}