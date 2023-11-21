<?php


$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Form".$name."\r\n";
$recipient = "mkamichalski@gmail.com";


mail($recipient, $subject, $message, $mailheader)
or die("Houston...");

echo'

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

?>