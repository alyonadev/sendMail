<?php

// Get the name, phone number, and city from the HTML form
$name = $_POST['name'];
$phone = $_POST['phone'];
$town = $_POST['town'];

// Set the email subject and body
$subject = 'Contact Form Submission';
$body = "Имя: $name\nТелефон: $phone\nГород: $town";

// Send the email
mail('21itzs.kovalenko.a@pdu.by', $subject, $body);

// Redirect the user to a confirmation page
header('Location: confirmation.php');

?>