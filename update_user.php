<?php
session_start();

if (isset($_SESSION['username']) ){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "shop";

	$username = $_SESSION['username'] ;

	$conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);


	$sql = "SELECT * FROM members WHERE username='$username' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    	
    	$id = $row["id"];
    	$username = $row["username"];
    	$email = $row["email"];
    	$password = $row["password"];
    	$mobile = $row["mobile"];
    	$address = $row["address"];

    	}
		if ( isset($_POST['up_email']) && isset($_POST['up_password']) && isset($_POST['up_password2']) && isset($_POST['up_mobile']) && isset($_POST['up_address']) ){
			
			$up_email = $_POST['up_email'];
			$up_password = $_POST['up_password'];
			$up_password2 = $_POST['up_password2'];
			$up_mobile = $_POST['up_mobile'];
			$up_address = $_POST['up_address'];
	
			if ($up_password == $up_password2){
	    		$dbupdate = mysqli_query($conn , "UPDATE members SET email='$up_email',password='$up_password',mobile='$up_mobile',address='$up_address' WHERE id='$id' ") ;
		    	$email = $up_email;
		    	$password = $up_password;
		    	$password2 = $up_password2;
		    	$mobile = $up_mobile;
		    	$address = $up_address;

		    	header("Location: user.php");
    		}
    	
	 	}

	}
	

}


?>

<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update here!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
   
   	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	     <ul class="nav navbar-nav">
	     <li><a href="logout.php">Logout</a></li>
	     <?php
	     echo '<li><a href="user.php">'.$_SESSION['username'].'</a></li>';
	     ?>
	     </ul>
	  </div>
	</nav>

   

	<div class="container" >
	  <h3>Update your profile:</h3>
	  <form name="registration" method="post" action="">
	    <div class="form-group">
	    </div>
	    <div class="form-group">
	    <label for="up_email">Email address:</label>
	    <input type="email" name="up_email" class="form-control" id="up_email" placeholder="Enter e-mail" value="<?php echo $email ?>" maxlength="30" required="TRUE">
	    </div>
	    <div class="form-group">
	      <label for="up_password">Password:(max length 12)</label>
	      <input type="password" name="up_password" class="form-control" id="up_password" placeholder="Enter password" value="<?php echo $password ?>" maxlength="12" minlength="5" required="TRUE"> 
	    </div>
	    <div class="form-group">
	      <label for="up_password2">Confirm Password:</label>
	      <input type="password" name="up_password2" class="form-control" id="up_password2" placeholder="Enter password again" value="<?php echo $password ?>" maxlength="12" minlength="5" required="TRUE">
	    </div>
	    <div class="form-group">
	      <label for="up_mobile">Mobile number:</label>
	      <input type="text" name="up_mobile" class="form-control" id="up_mobile" placeholder="Enter mobile number" value="<?php echo $mobile ?>" maxlength="13" required="TRUE" >
	    </div>
	    <div class="form-group">
	      <label for="up_address">Address:</label>
	      <input type="text" name="up_address" class="form-control" id="up_address" placeholder="Enter address" value="<?php echo $address ?>" required="TRUE">
	    </div>
	    <input type="submit" class="btn btn-default" value="submit">
	  </form>
	</div>

</body>

</html>