<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ffionb@btinternet.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $messageBody, $headers);

    // Redirect back to the form after sending the email
    header("Location: contact.html?success=true");
    exit();
}
?>
