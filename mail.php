<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="From: $name \n Email: $email \n Message: $message";
$recipient = "disi77@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
