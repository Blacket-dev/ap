<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($date) || empty($time) || empty($service) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Recipient email address (your email address)
    $to = "forbetterm@gmail.com";

    // Subject of the email
    $subject = "New Appointment Request";

    // Email body content
    $body = "You have received a new appointment request.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Date: $date\n";
    $body .= "Time: $time\n";
    $body .= "Service: $service\n";
    $body .= "Message: $message\n";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Appointment request sent successfully!";
    } else {
        echo "Failed to send appointment request.";
    }
}
?>
