<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "omhpatel7@gmail.com";  // Your email address
  $subject = "New Form Submission from $name";
  $body = "You received a new message:\n\n".
          "Name: $name\n".
          "Email: $email\n\n".
          "Message:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message sending failed. Check server mail configuration.";
  }
}
?>
