<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values
$usernameErr = $emailErr = $genderErr = $passErr = "";
$username=$lname = $email = $gender = $pass="";

if (isset($_POST['register'])) {
	$errors=array();
  if (empty($_POST["username"])) {
    $usernameErr = "username is required";array_push($errors,$usernameErr);
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; array_push($errors,$usernameErr);
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";array_push($errors,$emailErr);
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; array_push($errors,$emailErr);
    }
  }
    
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";array_push($errors,$passErr);
  } else {
    $pass = test_input($_POST["pass"]);
    // check if password has only capital letters
    if (!preg_match("/[A-Z0-9]*$/",$pass)) {
      $passErr = "Invalid pass"; array_push($errors,$passErr);
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";array_push($errors,$genderErr);
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(empty($errors)){
	  include 'registerSQL.php';
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>My Register Form</h2>
<?php include 'registerForm.php'; ?>

</body>
</html>