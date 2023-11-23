<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Form".$name."\r\n";

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 1; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "mail.smtp2go.com";
$mail->Port = 2525; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'michalskipro';
$mail->Password = 'Sender135#';
$mail->setFrom('marcin@michalski.pro', 'Form');
// $mail->addReplyTo('@gmail.com', ' Name');
$mail->addAddress('mkamichalski@gmail.com');
$mail->Subject = $subject;
$mail->msgHTML("test".$message."\r\n"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo '

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <div class="wrap">
           Sent!
        </div>
    </body>
    </html>
    
    ';
}
?>