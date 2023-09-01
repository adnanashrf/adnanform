<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "adnankashmiri567@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page after sending the email
    header("Location: thank_you.html");
    exit;
}
?>
