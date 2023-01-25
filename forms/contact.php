<?php

header("Access-Control-Allow-Origin: *");

// Check if form is submitted
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email
    $to = 'ghmartinez96@hotmail.com';

    // Subject
    $subject = 'Contact form submission from ' . $name;

    // Message
    $message = 'Name: ' . $name . "\r\n" . 'Email: ' . $email . "\r\n" . 'Subject: ' . $subject . "\r\n" . 'Message: ' . $message;

    // Headers
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Send email
    if(mail($to, $subject, $message, $headers)){
        echo '<div class="sent-message">Your message has been sent. Thank you!</div>';
    } else {
        echo '<div class="error-message">Something went wrong, please try again.</div>';
    }
}
?>
