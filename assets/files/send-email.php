Copy code
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'manjarymahasoa@gmail.com'; // Replace with the recipient's email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = array(
    'From: your-email@example.com', // Replace with your email address
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
  );

  if (mail($to, $subject, $body, implode("\r\n", $headers))) {
    echo 'Email sent successfully.';
  } else {
    echo 'An error occurred while sending the email.';
  }
}
?>