<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "omhpatel7@gmail.com"; // Change this to your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
} else {
    echo "Invalid request!";
}
?>
