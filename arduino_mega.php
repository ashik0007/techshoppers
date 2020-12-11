<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arduino Mega</title>
  <link rel="stylesheet" type="text/css" href="css/products.css">
  <?php
  include 'header.php';
  ?>
</head>
<body style="background-color: gray">

<h2 style="text-align:center ; color: azure">Arduino Mega</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 2</div>
    <img src="images/arduino_mega_2.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 2</div>
    <img src="images/arduino_mega_1.jpg" style="width:50%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/arduino_mega_2.jpg" style="width:50% ; position: relative; left: 202%" onclick="currentSlide(1)" alt="Arduino Mega">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/arduino_mega_1.jpg" style="width:50% ; position: relative; left: 152%;" onclick="currentSlide(2)" alt="Arduino Mega">
    </div>
  </div>
</div>

<br><br><br>

<?php

$conn = mysqli_connect("localhost" , "root" , "" , "shop");
$result = mysqli_query ($conn , "SELECT * FROM product WHERE pro_id='3' ");
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
      $pro_id = $row["pro_id"];
      $pro_name = $row["pro_name"];
      $pro_available = $row["available"];
      $pro_price = $row["pro_price"];
      $pro_sold = $row["sold"];
      }
}

if (isset($_SESSION['username'])) {
  echo '<div style="height: 40% ; width: 100% ; text-align: center; background-color: azure ; font-size: 20px;">
    <p>Price:'. $pro_price .' tk<br>Available:' . $pro_available . '</p>
    <form method="post">
    <input type="submit" name="cart" value="Add to cart">
    </form>
  </div>' ;
}
else{
  echo '<div style="height: 40% ; width: 100% ; text-align: center; background-color: azure ; font-size: 20px;">
    <p>Please login to buy products...</p>
  </div>';
}

if (isset($_POST['cart'])){
  $cart_name = $pro_name;
  $cart_price = $pro_price;

  $connect = new mysqli("localhost", "root", "", "shop") OR die("Connection failed!");
    $insert = "INSERT INTO cart (cart_name , cart_price) VALUES ('$cart_name' , $cart_price)";

    $result2 = mysqli_query ($connect , $insert);

  if ($result2){
    $pro_available = $pro_available - 1;
    $pro_sold = $pro_sold + 1;
    $update = mysqli_query ($connect , "UPDATE product SET available = '$pro_available' , sold = '$pro_sold' WHERE pro_id='3'  ");
    
    if ($update){
      echo "<script>
          alert('Added to cart!');
          window.location.href='arduino_mega.php';
        </script>";
    }
    
  }
}

?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
