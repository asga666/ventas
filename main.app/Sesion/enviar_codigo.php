<?php
require 'php-mailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'test.happycopy1@gmail.com';                 // SMTP username
$mail->Password = 'Testing1235';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('test.happycopy1@gmail.com', 'Happy Coppy');
$mail->addAddress('marcell.chdz@gmail.com', 'Marcell');     // Add a recipient



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Recuperacion de ';
$mail->Body    = 'Tu contraseña es <b>qwer0912</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}