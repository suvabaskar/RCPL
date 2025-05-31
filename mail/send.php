<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // For Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'ishanth.qrestik@gmail.com'; // Your Gmail
    $mail->Password = 'xyag afcq qxbs deqc'; // App password (not your actual Gmail password)
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('ishanth.qrestik@gmail.com', 'Website Contact');
    $mail->addAddress('ishanth.qrestik@gmail.com'); // Where you receive messages

    $mail->isHTML(true);
    $mail->Subject = 'New message from website';
    $mail->Body = "Name: {$_POST['name']}<br>Email: {$_POST['email']}<br>Message:<br>{$_POST['message']}";

    $mail->send();
    echo "Message sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample mail test</title>
</head>
<body>
    <form action="mailtest.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <textarea name="message" placeholder="Enter your message"></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>