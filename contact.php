<?php
if (isset($_POST['feedback_email']) && isset($_POST['feedback_message']) ) {

  $feedback_email = $_POST['feedback_email'];
  $feedback_message = $_POST['feedback_message'];

  $connect = new mysqli("localhost", "root", "", "shop") OR die("Connection failed!") ;
  $feedback_connect = mysqli_connect("localhost", "root", "", "shop");

  $sql = mysqli_query ($feedback_connect, "SELECT * FROM members WHERE email='$feedback_email' ");

  if (mysqli_num_rows($sql) > 0){
      $feedback_dbinsert = "INSERT INTO feedback(feed_email, message) VALUES ('$feedback_email', '$feedback_message')";

      if (mysqli_query ($connect , $feedback_dbinsert)){
          echo "Your feedback is complete!";
      }
      else {
          echo "Error: " .$feedback_dbinsert . "<br>" . mysqli_error($connect);
      }
  }

  else{
      echo "Your username or email does not match";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
  
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
     
     .jumbotron {
      margin-bottom: 0;
    }

    </style>
    <?php
      include 'header.php';
    ?>
</head>

<body>
  
  <h3 >Send us your feedback:</h3>
    <form name="feedback" action="" method="post">
    <div class="form-group">
      <label for="feedback_email">Email address:</label>
      <input type="email" class="form-control" id="feedback_email" name="feedback_email" placeholder="Enter e-mail">
    </div>
    <div class="form-group">
      <label for="feedback_message">Your message:</label>
      <input type="text" class="form-control" id="feedback_message" name="feedback_message" placeholder="Enter your message">
    </div>

    <input type="submit" class="btn btn-default">
    </form>

    <div>  
    <h3>Our office:</h3>  
      <pre>
        <h4>
  KUET,Khulna
  Amar Ekushey Hall (509E)
  Phone: 01521305037
  E-mail: ashikmahmudul007@gmail.com
        </h4>
    </pre>
  </div>

</body>
<?php exit(); ?>
</html>