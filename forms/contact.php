<?php
  // Replace this with your email address
  $receiving_email_address = 'anabelleabante12@gmail.com';

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  $success = mail($receiving_email_address, $subject, $message, $headers);

  if ($success) {
      echo 'Message sent successfully!';
  } else {
      echo 'Failed to send the message.';
  }
?>
