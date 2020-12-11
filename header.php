<!DOCTYPE html>
<html lang="en">
<head>
  <title>Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Techshoppers!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php
        session_start();
          if (isset($_SESSION['username'])){
            if ($_SESSION['username'] == 'admin'){
               echo '<li><a href="admin_index.php">'.$_SESSION['username'].'</a></li>';
               echo '<li><a href="logout.php">Logout</a></li>';
            }
            else{
               echo '<li><a href="user.php">'.$_SESSION['username'].'</a></li>';
               echo '<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>';
               echo '<li><a href="logout.php">Logout</a></li>';
            }
           
          }
          else{
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
          }
        ?>
        <li><a href="products.php">Buy a Product</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <form class="navbar-form navbar-right" action="" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter product name" name="search">
      </div>
      <button type="submit" class="btn btn-success" style="">Search</button>
    </form>
    </div>
  </div>
</nav>

</body>
</html>
