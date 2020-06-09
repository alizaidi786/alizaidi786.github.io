<?php 
 if (isset($_POST['submit'])) {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $hometype=$_POST['hometype'];
      $address=$_POST['address'];

      $to='dotcleaning6@gmail.com';
      $subject='New Customer';
      $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Home type: ".$hometype."\n"."Address: ".$address;
      $headers="From: ".$email;

      if (mail($to, $subject, $message, $headers)) {
      	echo "<h1>Successfull! Thank you"." ".$name.", we will contact you within 12 hours!</h1>";

      }
      else{
      	echo "Something went wrong! Try again";
      }
 }

 ?>