<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required!";
    } else {
        // Send email (you may need to configure mail settings on your server)
        $to = "your_email@example.com"; // Change this to your email address
        $subject = "New Message from Contact Form";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
} else {
    // Redirect back to the contact form if accessed directly
    header("Location: contact.php");
    exit;
}
?>
