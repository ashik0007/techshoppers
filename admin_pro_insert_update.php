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
elseif (isset($_POST['available']) && isset($_POST['product'])) {
  $con = mysqli_connect("localhost", "root", "", "shop") OR die("Connection failed!");
  $pro = $_POST['product'];
  $pro_available = $_POST['available'];

  $update = mysqli_query ($con , "UPDATE product SET available = '$pro_available' WHERE pro_name = '$pro'  ");
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

<?php
  include 'header.php';
  ?>
</head>
<body style="background-color: gray">

<h2 style="color: azure">Insert new product</h2>

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

<h2 style="color: azure">Update product</h2>
<form action="" method="post">

  <div class="container">

    <label for="product"><b>Product name</b></label>
    <input type="text" placeholder="Enter product to update" name="product" required>

    <label for="available"><b>Products to update</b></label>
    <input type="number" placeholder="Enter how many products to update" name="available" required>
    <input type="submit" class="btn btn-success" value="Update">
    
  </div>
</form>

</body>
</html>
