<?php

	if (isset($_POST['name'])){

		$del_name = $_POST['name'];
			
		$conn = mysqli_connect("localhost", "root", "", "shop") OR die ("Connection was failed");
			
		 		
		$dbdelete = "DELETE FROM cart WHERE cart_name='$del_name' " ;
		$result = mysqli_query ($conn , $dbdelete);

		if ($result){
			echo "<script>
					alert('Successfully deleted item!');
					window.location.href='cart.php';
		  </script>";
		}
		else{
			echo "There is a problem deleting!!!" ;
		}
		
	}

?>

<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete here!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

</body>

</html>