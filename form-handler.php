<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$subject = $_Post['subject'];
$message = $_Post['message'];

$email_from = 'info@knoeziekamma.com';

$email_subject = 'Knoetzie Kamma Enquery';
    
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n".
              "User Message: $message.\n";

$to = 'tjbeneckew@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
    
header("Location: Contact.html");

?>
