<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";

    if (!empty($name) && !empty($email) && !empty($phone)) {
        // Email Configuration
        $to = "sanjurichard0@gmail.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $message = "Name: $name\nEmail: $email\nPhone: $phone";
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Error sending message.";
        }
    } else {
        echo "Please fill out all fields.";
    }
} else {
    echo "Invalid request.";
}
?>
