<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $to = "lefa.cloud@hotmail.com"; // Replace with your email
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    if ($email && mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        http_response_code(500);
        echo "Failed to send the message.";
    }
}
?>