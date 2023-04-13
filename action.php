<?php
$database_host = 'localhost';
$database_user = 'root';
$database_password = '';
$database_name = 'studentdatabase';

// connect to the database
$conn = mysqli_connect($database_host, $database_user, $database_password, $database_name);


  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$matric_no = filter_var($_POST["matricNum"], FILTER_SANITIZE_NUMBER_INT);
	$current_address = filter_var($_POST["currAddress"], FILTER_SANITIZE_STRING);
	$home_address = filter_var($_POST["homeAddress"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$mobile_phone = filter_var($_POST["phone"],  FILTER_SANITIZE_NUMBER_INT);
	$home_phone = filter_var($_POST["homePhone"],  FILTER_SANITIZE_NUMBER_INT);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $matric_no = $_POST['matricNum'];
        $current_address = $_POST['currAddress'];
        $home_address = $_POST['homeAddress'];
        $email = $_POST['email'];
        $mobile_phone = $_POST['phone'];
        $home_phone = $_POST['homePhone'];
      
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

  if (!preg_match($matricReg, $matric_no))
  {
    $errors['matricNum'] = 'Please enter a valid matric number';
  }

  if (!preg_match($currentReg, $current_address))
  {
    $errors['currAddress'] = 'Please enter a valid address';
  }

  if (!preg_match($homeReg, $home_address))
  {
    $errors['homeAddress'] = 'Please enter a valid home address';
  }

  if (!preg_match($emailReg, $email))
  {
    $errors['email'] = 'Please enter a valid email address';
  }

  if (!preg_match($phoneReg, $mobile_phone))
  {
    $errors['phone'] = 'Please enter a valid phone number';
  }
  
  if (!preg_match($homePhoneReg, $home_phone))
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

$sql = "INSERT INTO `studentform`
 (`name`,
  `matricNum`, 
  `currAddress`,
   `homeAddress`,
   `email`, 
   `phone`, 
   `homePhone`) 


VALUES 
('$name',
 '$matric_no', 
 '$current_address', 
 '$home_address', 
 '$email', 
 '$mobile_phone',
 '$home_phone')";

$result = mysqli_query($conn, $sql);
echo $sql;


?>
