<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $recipient = "felipedaniel1910@hotmail.com"; // Replace with your email address

    $subject = "New Contact from $name";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Use the mail() function to send the email
    mail($recipient, $subject, $email_body);

    // Redirect to a confirmation page
    header("Location: index.html");
} else {
    // If the form was not submitted, redirect to the form page
    header("Location: index.html");
}
?>
