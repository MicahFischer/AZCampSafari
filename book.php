<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$adults = $_POST['adults'];
$kids = $_POST['kids'];
$formcontent=" From: $name \n Phone: $phone \n Date: $date \n Adults: $adults \n Kids: $kids";
$recipient = "micahefish@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
