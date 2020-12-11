<html>
<head>
<title>Feedbacks</title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css">
</head>

<body>

<div id="sidemenu">
 <ul>
 	<li><a href="index.php">Home</a></li>
	<li><a href="admin_delete.php">Remove User</a></li>
	<li><a href="admin_index.php">Index</a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>	
</div>

<div id="data">

<h1 class="container">Welcome to Feedbacks</h1>
<h2>Data available</h2>
<?php
    
    $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "shop";
	
	$conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);
	
	$sql = "SELECT * FROM feedback";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "ID:" . $row["feed_id"]. "<br>" . "Email: " . $row["feed_email"] .  "<br>" . "Feedback: " . $row["message"] . "<br><br><br>";		
	 }
} else {
    echo "<h3><center>No feedback data available!<center></h3>";
}
?>
</div>

</body>
</html>