<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message =$_POST['message'];

require 'mailer/PHPMailerAutoload.php';  
$mail = new PHPMailer(true);
$mail->SMTPDebug = 3;                                  // Enable verbose debug output  
$mail->isSMTP();                                       // Set mailer to use SMTP  
$mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
$mail->SMTPAuth = true;                                // Enable SMTP authentication  
$mail->Username = 'duongthuhoai30082000@gmail.com';               // your SMTP username  
$mail->Password = 'jkfzqcddbneqdjxj';                      // your SMTP password  
$mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
$mail->Port = 587;                                     // TCP port to connect to  
$mail->setFrom('duongthuhoai30082000@gmail.com', 'Duongthuhoai');  
$mail->addAddress($email);                             // set your BCC email address  
$mail->isHTML(true);   
$mail->Subject = 'New message from blog';  
$mail->Body  = '<h1>Thank you for contact <br></h1>';
$mail->Body.="$email <br>";
$mail->Body  .= "Cám ơn tôi sẽ sớm liên lạc lại với bạn, tin nhắn của bạn :  $message";
$mail->Body  .= "<p>$name <br>$phone</p>";
if($mail->send()) {  
echo 'Message has been sent';  
} else {  
echo 'Message could not be sent';  
}  
header("Location:contact.php");
?>