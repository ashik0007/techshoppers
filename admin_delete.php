<?php

	if (isset($_POST['del_id'])){

		$del_id = $_POST['del_id'];
			
		$conn = mysqli_connect("localhost", "root", "", "shop") OR die ("Connection was failed");
			
		 		
		$dbdelete = "DELETE FROM members WHERE id = '$del_id' " ;
		$result = mysqli_query ($conn , $dbdelete);

		if ($result){
			header("Location: admin_index.php") ;
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
   
	<div class="container" style="position: absolute; top: 95px">
	  <h3>Delete here:</h3>
	  <form name="deletion" method="post" action="">
	    <div class="form-group">
	      <label for="del_id">Enter id to delete:</label>
	      <input type="text" name="del_id" class="form-control" id="del_id" placeholder="Enter id to delete" value="">
	    </div>
	    
	    <input type="submit" class="btn btn-default" value="Delete">
	  </form>
	</div>

</body>

</html>