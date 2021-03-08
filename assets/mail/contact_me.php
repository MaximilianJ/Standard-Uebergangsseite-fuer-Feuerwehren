<?php
include '../../php/variables.php';
// Check for empty fields
if(!empty($_POST['e-mail']) || !empty($_POST['websiteurl']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$body = "Es ist eine Nachricht vom Kontaktformular eingegangen.\n\n"."Hier sind die Infos:\n\nName: $name\n\nE-mail: $email\n\nTelefon: $phone\n\nNachricht:\n$message";
$header = "From: $kontaktform_sendmail\n";
$header .= "Reply-To: $email";


if(!mail($kontaktform_to, $kontaktform_subject, $body, $header))
  http_response_code(500);
?>
