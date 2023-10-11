<?php
//Start session
	session_start();
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

	$arival = $_POST['start'];
	$confirm = $_POST['confirmation'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$nroom = $_POST['n_room'];
	$roomid = $_POST['rm_id'];
	$result = $_POST['result'];
	$name = $_POST['name'];
	$last = $_POST['last'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $type=$row['type'];
  
  }
  $payable= $rate*$result*$nroom;
	
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
	$errmsg_arr[] = 'invalid code';
		$errflag = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: personalinfoedit.php");
		exit();
	}
	mysql_query("UPDATE reservation SET arrival='$arival', departure='$departure', adults='$adults', child='$child',result='$result', room_id='$roomid', no_room='$nroom', firstname='$name', lastname='$last', city='$city', zip='$zip', province='$address',country='$country', email='$email', contact='$cnumber', password='$password', payable='$payable' WHERE confirmation='$confirm'");
	mysql_query("DELETE FROM roominventory WHERE confirmation='$confirm'");
	mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation) VALUES ('$arival','$departure','$n_room','$roomid','$confirm')");
	header("location: index.php");
mysql_close($con);
	?>