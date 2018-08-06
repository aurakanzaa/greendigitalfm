<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n subject: $subject \n  Message: $message";
$recipient = "admin@themepure.net";
$subject = "T H E M E L O C K . C  O M ";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: thank-you.html")
?>