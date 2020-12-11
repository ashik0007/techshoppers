<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Profile</title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css">
</head>

<body>

<div id="sidemenu">
 <ul>
 	<li><a href="index.php">Home</a></li>
	<li><a href="update_user.php"> Update User </a></li>
	<li><a href="delete_user.php"> Delete User </a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>	
</div>

<div id="data">

<h1 class="container">Welcome to User profile</h1>
<h2>Data available</h2>
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
    echo "Username: " . $row["username"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["password"]. "<br>" . "Mobile no: " . $row["mobile"] . "<br>" . "Address: " . $row["address"] . "<br><br><br>";		
	 }
	}
	else {
	    echo "<h3><center>No user data found!<center></h3>";
	}

}

?>
</div>

</body>
</html>




