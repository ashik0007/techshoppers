<?php
if (isset($_POST['search'])){

	$search = $_POST['search'];
	$conn = mysqli_connect("localhost", "root", "", "shop");

	$result = mysqli_query ($conn , "SELECT * FROM product WHERE pro_name = '$search'  ")

	if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)){
    	if ($row["pro_name"] ==  'Special Starter Kit'){
    		header("Location: starter_kit.php");
    	}
    	elseif ($row["pro_name"] ==  'Arduino') {
    		echo '<a href="arduino_uno.php">Arduino Uno</a>';
    		echo '<a href="arduino_mega.php">Arduino Mega</a>';
    	}
    	else {
    		die ("No result found!");
    	}
    }

    }
}


?>