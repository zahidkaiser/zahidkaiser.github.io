<?php
$to = "zahidkaiser@gmail.com";
$subject = "Customer Query";
$message = "Name:<br>".$_POST["c_name"]."<br><br>Email:<br>".$_POST["c_email"]."<br><br>Phone:<br>".$_POST["c_phone"]."<br><br>Message:<br>".$_POST["c_message"];
$from = $_POST["email"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <'.$_POST["email"].'>' . "\r\n";
mail($to,$subject,$message,$headers);
echo "Thank you. Message Sent Successfully !";
?>
