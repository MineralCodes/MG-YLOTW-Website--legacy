<?php

$recipient = "ylotw1@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Hello from"." ".$_POST['name'];
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $message, $mailheader) or die(header('location: ./formsubmit/formerror.html'));
header("location: ./formsubmit/formcomplete.html");