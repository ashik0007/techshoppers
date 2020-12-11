<html>
<head>
<title>Admin Index</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<style>
	body{
		background-image: url(images/bg_dark.jpg);
		height: 100%;
		background-position: center center;
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
	}

</style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-expand-sm">
  <div class="container-fluid">
    
   <a class="navbar-brand" href="index.php">Techshoppers!</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="navbar-nav ml-sm-auto">
        <a class="nav-item nav-link bg_dark rounded text-white" href="admin_business.php">Business</a>
        <a class="nav-item nav-link bg_dark rounded text-white" href="admin_delete.php">Remove User</a>
        <a class="nav-item nav-link bg_dark rounded text-white" href="admin_feedback.php">Feedbacks</a>
        <a class="nav-item nav-link bg_dark rounded text-white" href="logout.php">Log out</a>
      </div>
    </div>
  </div>
</nav>


<div class="container" style="color: azure" >
<h1 class="text-center">Welcome to Admin Panel</h1>
<h2 class="text-center">Data available</h2>
<div class="row">
<?php
    
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "shop";
	
	$conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);
	
	$sql = "SELECT * FROM members";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-5 p-2 mt-2 border border-white rounded text-center mx-1"> ID:' . $row["id"]. '<br>    Username:  '. $row["username"].  ' <br>   Email: ' . $row["email"] . ' <br>  Password: ' . $row["password"]. '<br>  Mobile no: ' . $row["mobile"]. '<br> Address: ' . $row["address"] . '<br></div>';		
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
</div>

</body>
</html>