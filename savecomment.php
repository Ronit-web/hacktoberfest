<?php

	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];	

	
	$sql="INSERT INTO comment (name, email, content)
VALUES
('$name','$email','$message')";
  header("location: index.php#3");
mysql_close($con)

	
?>


