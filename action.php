<?php

// Define the error messages
$errors = array();
$error_messages = array(
    'name' => 'Please enter your name.',
    'email' => 'Please enter a valid email address.',
    //'message' => 'Please enter a message.'
);

// Sanitize the input
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Validate the input
if (empty($name)) {
    $errors['name'] = $error_messages['name'];
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = $error_messages['email'];
}
// if (empty($message)) {
//     $errors['message'] = $error_messages['message'];
// }

// If there are errors, return the error messages
if (!empty($errors)) {
    header('Content-Type: application/json');
    echo json_encode(array('errors' => $errors));
    exit;
}

// If there are no errors, send the email and return a success message
$to = 'you@example.com';
$subject = 'New Message from Your Website';
$headers = "From: $email\r\nReply-To: $email\r\n";
//$message_body = "Name: $name\n\nEmail: $email\n\nMessage:\n\n$message";
//mail($to, $subject, $message_body, $headers);
header('Content-Type: application/json');
echo json_encode(array('message' => 'Your message was sent successfully.'));
exit;

?>
