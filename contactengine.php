<?php

header('Content-Type: application/json');

$EmailFrom = Trim(stripslashes($_POST['email']));

$EmailTo = [
	"francois@witify.io"
]

$headers = array("From: $EmailFrom",
    "Reply-To: francois@witify.io",
    "X-Mailer: PHP/" . PHP_VERSION
);

$headers = implode("\r\n", $headers);

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

$subject = 'Courriel de ' + $name + 'venant de jefferycondos.com';

// Validation
$validationOK = true;

if (!$validationOK) {
	echo json_encode(array('success' => false));
	exit;
}

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

// Send email 
foreach($EmailTo as $to) {
	$success = mail($to, $subject, $body, $headers);
}

// Redirect to success page 
if ($success) {
	echo json_encode(array('success' => true));
	exit();
}
else {
	echo json_encode(array('success' => false));
	http_response_code(500);
	exit();
}
?>