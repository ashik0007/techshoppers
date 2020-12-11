<?php
$conn = mysqli_connect("localhost" , "root" , "" , "shop");

$sql = "SELECT * FROM product ";
$result = mysqli_query($conn, $sql);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Business</title>
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
	echo '<h2>Welcome Admin. Take a look here about your business.</h2>';
	echo '<a href="admin_pro_insert_update.php">Click here to insert or update products</a>';
	echo '<tr>
		    <th>Serial</th>
		    <th>Product Name</th>
		    <th>Price</th>
		    <th>Product Available</th>
		    <th>Product Sold</th>
		    <th>Profit for this product</th>
		  </tr>';
	  
	$i = 1;
	$total_profit = 0;
	$total_sell = 0;
	while($row = mysqli_fetch_assoc($result)) {
		  
		$pro_name = $row["pro_name"];
		$pro_price = $row["pro_price"];
		$pro_available = $row["available"];
		$pro_sold = $row["sold"];
		$profit = $row["profit"];
		$sum_profit = $profit * $pro_sold;
		  echo '<tr>
				    <td>' . $i . '</td>
				    <td>' . $pro_name . '</td>
				    <td>' . $pro_price . '</td>
				    <td>' . $pro_available. '</td>
				    <td>' . $pro_sold . '</td>
				    <td>' . $sum_profit . '</td>
				 </tr>'; 

		$i++;
		$total_profit = $total_profit + $sum_profit;
		$total_sell = $total_sell + $pro_sold;
	 }
	 $i = $i - 1;
	 echo '<tr>
		    <th>Total products: ' . $i . '</th>
		    <th></th>
		    <th>Total sell: </th>
		    <th>' . $total_sell . '</th>
		    <th>Total profit: </th>
		    <th>' . $total_profit . '</th>
		  </tr>';		  

}
else {
    echo "<h3><center>No Sell!<center></h3>";
}

?>

</table>
</body>

</html>


