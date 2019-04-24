<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['messgae'];

$email_from = 'test@softwin.com'

$email_subject = 'New form submission'

$email_body = "User Name: $name.\n".
"Visitor Email: $visitor_email.\n".
"User Message: $message.\n";

$to = "clasherhacksu@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contactpage.html");

?>