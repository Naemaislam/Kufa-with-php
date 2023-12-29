<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include("./src/PHPMailer.php");
include("./src/SMTP.php");
include("./src/Exception.php");



if(isset($_POST['mail_post_btn'])){
$mail = new PHPMailer(true);
$name = $_POST['name'];
$email_to = $_POST['email'];
$message = $_POST['message'];
$subject = "greeting Massege";
$body = "Hey sir!-$name"."<br>"."We are happy to have you join our online community!"."<br>"."<br>"."<br>"."Best wishes"."<br>"."online admin.";
         
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'mmaruf950@gmail.com';                    
    $mail->Password   = 'xppf ubcx hzmx lwdp';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                  
 
    $mail->setFrom('mmaruf950@gmail.com', 'fun king bd');
    $mail->addAddress($email_to,$name);     
   
    $mail->addReplyTo($email_to);
    

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = "$subject";
    $mail->Body    = "$body";
    
    $mail->send();
    echo 'Message has been sent';










}
