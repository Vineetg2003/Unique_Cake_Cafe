<?php
//get data from form  
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);
$mobile = htmlspecialchars($_POST['mobile']);
$address = htmlspecialchars($_POST['Address']);
$to = "vineetgoyal130@gmail.com";

$subject = "Mail From Unique Cake Cafe";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number = " . $mobile . "\r\n Address = " . $address;
$headers = "From: noreply@uniquecakecafe.com\r\n" .
           "Content-Type: text/plain; charset=UTF-8";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// redirect
header("Location:thankyou.html");
?>
