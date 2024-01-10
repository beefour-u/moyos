<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $persons = $_POST['persons'];
 $date = $_POST['date'];

 // Set email variables
 $to = 'xxxxxx@yahoo.com';
 $subject = 'New Message From Contact Form';
 $headers = 'From: ' . $email;

 // Format message
 $body = "Name: $name\nPhone: $phone\nEmail: $email\nPersons: $persons\nDate: $date";


 // Send email
 if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
   } else {
    echo "Failed to send message.";
   }
  }
?>
