<?php

if (isset($_POST['pro_name']) && isset($_POST['pro_price']) && isset($_POST['avail']) && isset($_POST['sold']) && isset($_POST['profit']) ){
  $pro_name = $_POST['pro_name'];
  $pro_price = $_POST['pro_price'];
  $avail = $_POST['avail'];
  $sold = $_POST['sold'];
  $profit = $_POST['profit'];

  $conn = new mysqli("localhost", "root", "", "shop") OR die("Connection failed!");

  $sql = "INSERT INTO product (pro_name, pro_price, available, sold, profit) VALUES ('$pro_name', '$pro_price', '$avail', '$sold', '$profit')";
  mysqli_query ($conn , $sql);
  
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.container {
    padding: 16px;
}

</style>
</head>
<body style="background-color: gray">

<h2>Insert new product</h2>

<form action="" method="post">

  <div class="container">
    <label for="pro_name"><b>Product name</b></label>
    <input type="text" placeholder="Enter Product name" name="pro_name" required>

    <label for="pro_price"><b>Price</b></label>
    <input type="number" placeholder="Enter price" name="pro_price" required>

    <label for="avail"><b>Available</b></label>
    <input type="number" placeholder="Enter how many products" name="avail" required>

    <label for="sold"><b>Sold</b></label>
    <input type="number" placeholder="How many sold" name="sold" required>

    <label for="profit"><b>Profit(per sell)</b></label>
    <input type="number" placeholder="Enter Username" name="profit" required>
        
    <input type="submit" class="btn btn-success" value="Insert!">
    
  </div>
</form>

</body>
</html>
