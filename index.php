<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop now!</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<?php
	include 'header.php';
	?>
</head>
<body style="background-color: aliceblue">
<h3 style="text-align:center ; color: teal"><marquee>Welcome to Techshoppers! We believe in Quality over Quantity.</marquee></h3>
<center><h3 style="color: teal">We offer:</h3></center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="images/Starter-Kit_3.jpg" style="width:80% ; position: relative;left: 8%">
  <div class="text">Special starter Kit</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="images/arduino_uno_2.jpg" style="width:60% ; position: relative;left: 18%">
  <div class="text">Arduino Uno</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="images/arduino_mega_2.jpg" style="width:70% ; position: relative;left: 13%">
  <div class="text">Arduino Mega</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="images/motor_driver2.jpg" style="width:80% ; position: relative;left: 7%">
  <div class="text2">Motor Driver</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="images/sonar.jpg" style="width:80% ; position: relative;left: 10%">
  <div class="text2">Sonar Sensor</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="images/buk_module.jpg" style="width:80% ; position: relative;left: 10%">
  <div class="text2">Buck Module</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="images/jumper.jpg" style=" width:70% ; position: relative;left: 13%">
  <div class="text">Connecting wires</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="images/lcd_display_module_1.jpg" style="width:70% ; position: relative;left: 15%">
  <div class="text">LCD Display Module</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot" ></span> 
  <span class="dot" ></span> 
  <span class="dot" ></span> 
  <span class="dot" ></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000);
}
</script>

</body><br><br><br><br>
<footer>
	<?php
		include 'footer.php';
	?>
</footer>
</html> 
