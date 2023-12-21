<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$mobile= $_POST['mobile'];
$address= $_POST['Address'];
$to = "vineetgoyal130@gmail.com";

$subject = "Mail From Unique Cake Cafe";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Mobile Number = ". $mobile ."\r\n Address = " .$address;
$headers = "From: noreply@uniquecakecafe.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>