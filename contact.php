<?php
$name = $_POST['name'];
$email = $_POST['email'];
$priority = $_POST['priority'];
$category = $_POST['category'];
$message = $_POST['message'];
$formcontent=" From: $name \n Priority: $priority \n Category: $category \n Message: $message";
$recipient = "anthonycowan8596@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
