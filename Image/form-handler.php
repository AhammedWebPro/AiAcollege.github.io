<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message']

$email_from = 'ahammedhafija@gmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n"
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "user message: $message .\n";

$to = 'ahammedsenjar@mail.com';
$headers = "Form: $email_from \r\n";
$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>