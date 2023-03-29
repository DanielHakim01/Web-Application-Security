<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $matric = $_POST['matricNum'];
  $curr = $_POST['currAddress'];
  $home = $_POST['homeAddress'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $homePhone = $_POST['homePhone'];

  // Define regular expressions for validation
  $nameReg = '/^(?!.*[<>])[a-zA-Z\s]+$/';
  $matricReg = '/^(?!.*[<>])[a-zA-Z0-9]+$/';
  $currentReg = '/^(?!.*[<>])[a-zA-Z0-9\s\.,]+$/';
  $homeReg = '/^(?!.*[<>])[a-zA-Z0-9\s\.,]+$/';
  $emailReg = '/^(?!.*[<>])[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  $phoneReg = '/^(?!.*[<>])\+?\d{8,}$/';
  $homePhoneReg = '/^(?!.*[<>])\+?\d{8,}$/';
  
  

  // Validate the form data using regular expressions
  $errors = [];
  if (!preg_match($nameReg, $name))
  {
    $errors['name'] = 'Please enter a valid name';
  }

  if (!preg_match($matricReg, $matric))
  {
    $errors['matricNum'] = 'Please enter a valid matric number';
  }

  if (!preg_match($currentReg, $curr))
  {
    $errors['currAddress'] = 'Please enter a valid address';
  }

  if (!preg_match($homeReg, $home))
  {
    $errors['homeAddress'] = 'Please enter a valid home address';
  }

  if (!preg_match($emailReg, $email))
  {
    $errors['email'] = 'Please enter a valid email address';
  }

  if (!preg_match($phoneReg, $phone))
  {
    $errors['phone'] = 'Please enter a valid phone number';
  }
  
  if (!preg_match($homePhoneReg, $homePhone))
  {
    $errors['homePhone'] = 'Please enter a valid home number';
  }

  // Process the form data if there are no validation errors
  if (empty($errors)) {
    // TODO: Process the form data (e.g. send an email)
    $response = ['success' => true];
  } else {
    $response = ['success' => false, 'errors' => $errors];
  }

  // Return the response as JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}

?>
