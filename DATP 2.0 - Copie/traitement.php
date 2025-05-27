<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$email = new PHPMailer(true);
//Create an instance; passing `true` enables exceptions

try {
  //Server settings
  $email->isSMTP();                                            //Send using SMTP
  $email->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $email->SMTPAuth   = true;                                   //Enable SMTP authentication
  $email->Username   = 'sarahdevwebtest@gmail.com';                     //SMTP username
  $email->Password   = 'ocmw vnal gtql oxpm';                               //SMTP password
  $email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $email->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $email->CharSet = 'UTF-8';
  $email->setFrom('sarahdevwebtest@gmail.com', 'Mailer');
  $email->addAddress('sarahdevwebtest@gmail.com');     //Add a recipient

  //Content
  $email->isHTML(true);                                  //Set email format to HTML
  $email->Subject = 'Demande de devis';
  $email->Body    = sprintf('<p>Bonjour %s %s, votre demande de devis a bien été envoyé !</p>', $first_name, $last_name);
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $email->send();
  echo 'Le mail a bien été envoyé';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
}
