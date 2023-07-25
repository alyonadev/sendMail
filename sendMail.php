<?php

// Get the name, phone number, and city from the HTML form
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];

// Set the email subject and body
$subject = 'Contact Form Submission';
$body = "Имя: $name\nТелефон: $phone\nГород: $city";

// Send the email
mail('email@address.com', $subject, $body);

// Redirect the user to a confirmation page
header('Location: confirmation.php');

?>