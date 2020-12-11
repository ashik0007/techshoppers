<?php

if (isset($_POST['username']) && isset($_POST['password']) ){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect("localhost", "root", "", "shop");
  $sql = "SELECT * FROM members WHERE username='$username' AND password='$password' ";
  $result = mysqli_query ($conn , $sql);

  if (mysqli_num_rows($result)>0){

      session_start();
      $_SESSION['username'] = $username ;

      if ($_SESSION['username'] == "admin" ){
        header("Location: admin_index.php");
      }
      else{
        header("Location: index.php");
      }
      exit();
  }
  else{
      echo "Unsuccessful";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login here!</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style>
  
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
     
     .jumbotron {
      margin-bottom: 0;
    }
    
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
<body style="background-image: url(images/shopping.jpg)">
 <div class="container ">
    <h2>Login here:</h2>
    <form name="login" method="post" action="">
      <div class="form-group">
        <label for="username">Enter Username:</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="password">Enter Password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
      </div>
      <input type="submit" class="btn btn-default" value="Login">
    </form>
  </div>

</body>

</html>