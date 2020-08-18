<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone']
$address = $_POST['address'];
$formcontent="From: $name \n phone: $phone \n address : $address \n email: $email";
$recipient = "alimdzaidi5@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Will Contact You Back Very Soon.";
?>