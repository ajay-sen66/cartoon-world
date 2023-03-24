<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='ajaysen66.com';

$email_subject='new form submission';

$email_body="user   name: $name.\n".
            "user email:$visitor_email.\n".
            "subject: $subject.\n". 
            "user message: $message.\n";

            $to='ajaysen4736@gmail.com';

            $header="from: $email_from \r\n";
            
            $header .="reply-to: $visitor_email \r\n";

            mail($to, $email_subject,$email_body,$headers);

            header("location: contact.html");




?>