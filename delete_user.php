<?php
session_start();

if (isset($_SESSION['username']) ){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "shop";

	$username = $_SESSION['username'] ;

	$conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$db);
	$result = mysqli_query($conn , "DELETE FROM members WHERE username='$username' ");

	if ($result){
		include 'logout.php';
	}
	else{
		die("There is a problem deleting!");
	}

}

?>