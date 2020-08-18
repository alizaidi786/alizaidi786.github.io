<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone']
$address = $_POST['address'];
$formcontent="From: $name \n phone: $phone \n address : $address \n email: $email";
$recipient = "alimdzaidi5@gmail.com";
$subject = "Membership Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thanks for being the member of Vishwa Shia Parishad! Will contact you back within 24hrs.";
?>