<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    $to = "robertsbaer@yahoo.com"; // Change to your email address
    $subject = "New Newsletter Signup";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "Error sending email.";
    }
}
?>
