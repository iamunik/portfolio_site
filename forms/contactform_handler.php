<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject']


$email_from = 'data4seun@gmail.com';


$email_subject = 'I visited your portfolio'

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n". 
				"User Message: $message.\n";


$to = "data4seun@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers)
header("Location: example.html");


?>