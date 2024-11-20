<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->Port = 587;
$mail->Host = "smtp.jordiline.co.za";
//$mail->SMTPDebug=2;
$mail->IsHTML(true);

$mail->SMTPAuth = true;
$mail->Username = "eric@jordiline.co.za";
$mail->Password = "nobandnoamp125@";

//Sender Info
$mail->From = "no-reply@ictdesignhub.com";
$mail->FromName = "User Authentication";