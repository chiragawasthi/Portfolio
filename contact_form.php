<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'chiragawasth@gmail.com';

$email_subject = "NEw form Submittion";

$email_body = "User Name : $name.\ n".
                    "User Email : $visitor_email.\n ".
                        "User Message : $message.\n";


$to = "chiragawasthi9@gmail.com";

$headers = "From : $email_from \r\n";

$headers = "Reply-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers );

header("Location: index.html");

?>