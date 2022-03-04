<?php
$name= $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@yourwebsite.comshould be your domain name';

$email_subject = 'New Form Submission';

$email_body ="User Name: $name.\n".
$email_body ="User Email: $vistor_email.\n".
$email_body ="Subject: $subject.\n".
$email_body ="Message: $vistor_email.\n";



$to = 'brandonmaxwell77@gmail.com';

$headers = "From: $email_from \r\n";

$hearders .= "Reply-To: $vistor_email r\n\";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>