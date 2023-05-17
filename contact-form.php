<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send email
$to = "cetl@example.com";
$subject = "Message from CETL Website";
$body = "Name: $name\nEmail: $email\n\n$message";
$headers = "From: $email";
if (mail($to, $subject, $body, $headers)) {
	echo "<p>Your message has been sent. Thank you for contacting us!</p>";
} else {
	echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
}
?>
