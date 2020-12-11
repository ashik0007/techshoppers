<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['mobile']) && isset($_POST['address']) ){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];

  $conn = new mysqli("localhost", "root", "", "shop") OR die("Connection failed!");

  $sql = "INSERT INTO members (username, email, password, mobile, address) VALUES ('$username', '$email', '$password', '$mobile', '$address')";

  if ($password == $password2){
      if (mysqli_query ($conn , $sql)){
      session_start();
      $_SESSION['username'] = $username ;
      header("Location: index.php");
    }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  else {
    echo "Your password in incorrect!";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup Here!</title>

  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<style>
	body{
		height: 100%;
		background-position: center center;
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
	}

</style>

  <?php
  include 'header.php';
  ?>
</head>
<body style="background-image: url(images/online-shopping_2.jpg)">

<form name="signupform"  method="post" action="">
  <div class="container">
    <h1>Sign Up</h1>
    <h3 style="color: teal;">Already have an account? <a href="login.php" style="color:dodgerblue">Login</a> here.</h3><br>
    
    <label for="username" ><b>*Username:</b></label>
    <input type="text" placeholder="Enter Username" name="username" maxlength="15" value="" required>

    <label for="email"><b>*Email:</b></label>
    <input type="email" placeholder="Enter Email address" name="email" maxlength="30" value="" required>

    <label for="password"><b>*Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" maxlength="15" value="" required>

    <label for="password2"><b>*Confirm Password:</b></label>
    <input type="password" placeholder="Re-type Password" name="password2" maxlength="15" value="" required>

    <label for="mobile"><b>*Mobile no:</b></label>
    <input type="text" placeholder="Enter Mobile number" name="mobile" maxlength="11" value="" required>

    <label for="address"><b>Your Address</b></label>
    <input type="text" placeholder="Enter Your Address" name="address" maxlength="30" value="" required>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <input type="submit" class="button" value="Sign up">
    
  </div>
</form>

</body>

<footer>
  <?php
    include 'footer.php';
  ?>
</footer>

</html>