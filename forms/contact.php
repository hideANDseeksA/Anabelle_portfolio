<?php
<<<<<<< HEAD
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'your-email@gmail.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Use Gmail's SMTP server
$contact->smtp = array(
    'host' => 'smtp.gmail.com',              // Gmail SMTP host
    'username' => 'your-email@gmail.com',    // Your Gmail address
    'password' => 'your-app-password',       // Your App Password (from Google)
    'port' => '465',                         // Gmail SMTP port for SSL
    'encryption' => 'ssl'                    // Encryption type
);

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

echo $contact->send();
=======
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
>>>>>>> 02490a50425f1c2ad876f7394251618c6995d7dd
?>
