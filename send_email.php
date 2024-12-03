<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "lefa.cloud@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission: $service";
    $emailMessage = "You have received a new message from your contact form. (WEBSITE).\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Service: $service\n\n" .
        "Message:\n$message";

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Validate inputs and send email
    if ($email && !empty($name) && !empty($phone) && !empty($service) && !empty($message)) {
        if (mail($to, $subject, $emailMessage, $headers)) {
            echo "Message sent successfully. Thank you for contacting us!";
        } else {
            echo "Failed to send the message. Please try again.";
        }
    } else {
        echo "Invalid input. Please fill out all fields correctly.";
    }
} else {
    echo "Invalid request method.";
}
?>