<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Simple email sending (replace with your preferred method)
    $to = "your@email.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_content, $headers);

    // Redirect back to the contact page with a success message
    header("Location: contact.html?status=success");
    exit;
} else {
    // If the form wasn't submitted, redirect to the homepage
    header("Location: index.html");
    exit;
}
?>
