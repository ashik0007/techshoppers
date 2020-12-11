<?php
$conn = mysqli_connect("localhost" , "root" , "" , "shop");

$sql = "SELECT * FROM cart ";
$result = mysqli_query($conn, $sql);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<?php
	include 'header.php';
	?>

	<style>
	table {
	    border-collapse: collapse;
	    border-spacing: 0;
	    width: 100%;
	    border: 1px solid #ddd;
	}

	th, td {
	    text-align: left;
	    padding: 16px;
	}

	tr:nth-child(even) {
	    background-color: #f2f2f2
	}
</style>

</head>
<body>

<table>

<?php

if (mysqli_num_rows($result) > 0) {
	echo '<h2>This is your cart. Click Confirm to finish your buying.</h2>';
	echo '<tr>
		    <th>Serial</th>
		    <th>Product Name</th>
		    <th>Price</th>
		    <th></th>
		  </tr>';
	  
	$i = 1;
	$sum = 0;
	while($row = mysqli_fetch_assoc($result)) {
		  
		$cart_name = $row["cart_name"];
		$cart_price = $row["cart_price"];
		  echo '<tr>
				    <td>' . $i . '</td>
				    <td>' . $cart_name . '</td>
				    <td>' . $cart_price . '</td>
				    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Remove</button>
				 </tr>';

			$i++;
			$sum = $sum + $row["cart_price"];
	 }
	 $i = $i - 1;
	 echo '<tr>
		    <th>Total products: ' . $i . '</th>
		    <th>Total Price: </th>
		    <th>' . $sum . '</th>
		    <th><form method="post">
		    	<input type="submit" class="btn" name="confirm" value="Confirm!">
		    	</form></th>
		  </tr>';

		  

}
else {
    echo "<h3><center>No Product in the cart!<center></h3>";
}

if (isset($_POST['confirm'])){

	$delete = mysqli_query ($conn , " DELETE FROM cart");
	echo "<script>
					alert('Thanks for your business!');
					window.location.href='index.php';
		  </script>";

}


?>

</table>



  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Remove here:</h4>
      </div>
      <div class="modal-body">
        
      		  <form name="deletion" method="post" action="cart_delete.php">
			    <div class="form-group">
			      <label for="name">Enter Product name:</label>
			      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name to remove" value="">
			    
			    
			    <button type="submit" class="btn btn-primary" value="">Remove</button> 
			    </div>
			  </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>

</html>


