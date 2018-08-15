<?php

require('libs/PHPMailer/class.phpmailer.php');

$mail = new PHPMailer;

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['message'];



  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->Host = "smtp.gmail.com"; // SMTP server
  $mail->SMTPDebug = 4;                     // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only
  $mail->SMTPSecure = 'ssl';
  $mail->SMTPAuth = true;                  // enable SMTP authentication
  $mail->Port = 587; // set the SMTP port for the GMAIL server
  $mail->SMTPAuth = true;
  $mail->Username = GMAIL_USERNAME;  // SMTP account username
  $mail->Password = GMAIL_PASSWORD;        // SMTP account password

  $mail->CharSet = 'UTF-8';

  $mail->From = $email;
  $mail->FromName = $name;

  $mail->addAddress(WHO_IT_GETS_SENT_TO);

  $mail->addReplyTo($email, $mail->FromName);

  $mail->Subject  = 'Inquiry From '. $mail->FromName;

  $mail->isHTML(true);

  $html = <<<STARTEMAIL

  <html>
      <body>

      <p style="margin: auto;">$msg</p><br>

      </body>
  </html>

STARTEMAIL;

          $mail->Body = $html;
          $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

          $currentURL = $_SERVER['REQUEST_URI'];

          //Success

          header("Location: $WHATEVER_PAGE_YOU_WANT_TO_REDIRECT_TO_UPON_SUCCESS");//echo "Message Sent!";
          echo "Message Sent!";

//Error
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
