<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

		$email = $_POST['email'];
		$user = $_POST['user'];
		$result1 = mysql_query("SELECT * FROM user where username='$user'");
while($row = mysql_fetch_array($result1))
  {
  $password=$row['password'];
  }
$to=$email_to;

$subject="Your password here";

$header="from: your name <tameraplazain@gmail.com>";

$messages= "Your password for login to our website \r\n";
$messages.="Your password is $password \r\n";
$messages.="more message... \r\n";

$sentmail = mail($email,$subject,$messages,$header);

		
		header('Location: admin_index.php');
?>