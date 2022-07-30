<?php

$sendTo = "andy@southbeat.com.au";
$subject = "Superstitious Contact Form";


$headers = "From: " . $_POST["name"]; 
$headers .= "<" . $_POST["email"] . ">\r\n"; 
$headers .= "Reply-To: " . $_POST["email"] . "\r\n"; 
$headers .= "Return-Path: " . $_POST["email"]; 


$message = "Phone: ".$_POST["phone"]."\n\n"."Message: ".$_POST["message"];
$message = wordwrap($message,70);



mail($sendTo, $subject, $message, $headers);

?>