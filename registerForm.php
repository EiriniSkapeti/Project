


<!--
<p><span class="error">* required field.</span></p>
<form method="post" action="">  
<table>
<tr>
  <td>Username:</td>
  <td><input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  </td>
</tr>

<tr>
  <td>E-mail: </td>
  <td><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </td>
</tr>
<tr>
  <td>password:</td>
  <td><input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  </td>
</tr>
<tr>
  <td>Gender:</td>
  
  <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  </td>
</tr>
  </table>
  <input type="submit" name="register" value="register">  
</form>
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<form action="" method="post" class="container mt-3" style="width:500px; margin:auto">

  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <div class="form-group">
    <label for="gender">Gender:</label>
   
	 <select  class="form-control" id="gender" name="gender" >
		<option value="female">Female</option>
		<option value="male">Male</option>
		<option value="other">Other</option>
		<div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
  
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree with the terms.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  
  <button type="submit" name="register"  value="register" class="btn btn-primary">Submit</button>

</form>

</body>

</html>
