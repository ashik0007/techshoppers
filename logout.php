<?php
session_start();
//setcookie("username", $_SESSION['username'], time()-60*60*24);
session_destroy(); 
if($_SESSION['username'] ){ 
$msg = "You are now logged out";
header("location: index.php"); 
//header( "refresh:5;url=index.php" );
}

?> 
<html>
<body>
<?php echo "$msg"; ?><br>
<p>please wait for 5 sec to get back home page ...Else<a href="index.php">Click here</a> to return to our home page </p>
</body>
</html>