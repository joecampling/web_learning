<h1> This page will send an email. </h1>

<?php
// Recipient
$to = 'freerangepenguin@hotmail.com';

// Subject
$subject = 'This is a test email.';

// Message
$message = '<h1>Hi there.</h1><p>Thanks for testing!</p>';

// Headers
$headers = "From:  Joe the Crow <freerangepenguin@hotmail.com>\r\n";
$headers .= "Reply-to: freerangepenguin@hotmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
mail($to, $subject, $message, $headers);

 ?>
