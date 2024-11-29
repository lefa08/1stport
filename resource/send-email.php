<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->Port = 587;
$mail->Host = "smtp.soundysync.co.za";
//$mail->SMTPDebug=2;
$mail->IsHTML(true);

$mail->SMTPAuth = true;
$mail->Username = "nevil@soundysync.co.za";
$mail->Password = "nobandnoamp125@";

//Sender Info
$mail->From = "no-reply@soundysync.co.za";
$mail->FromName = "User Authentication";