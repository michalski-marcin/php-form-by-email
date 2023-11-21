<?php


$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Formularz".$name."\r\n";
$recipient = "mkamichalski@gmail.com";


mail($recipient, $subject, $message, $mailheader)
or die("Houston...");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <div class="wrap">
        Wysłano!
    </div>
</body>
</html>

';

?>