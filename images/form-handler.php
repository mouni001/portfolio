<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'mounira.zitouni@hotmail.com';

$email_subject = 'New Form submission';

$email_body = "Use Name: $name.\n". 
                "User Email: $visitor_email.\n". 
                "User Message: $message.\n";

$to = 'mounira.zitouni@hotmail.com';

$headers = "From: $email_from \r \n";

$headers .="Reply-To:$visitor_email \r\n";

mail($to ,$email_body, $headers);

header("Location: index.html ")
?>