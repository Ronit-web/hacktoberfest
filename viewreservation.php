<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Detaied Billing Report of Tamera Plaza Inn</title>
<style type="text/css">
@import url(css1.css);
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center"><span class="style2">Tamera Plaza Inn</span><br />
  #79 Lacson St., Bacolod City 6100<br />
  Telephone: +63(034) 432-1708<br />
  Telefax: +63(034) 709-0886<br />
  Mobile: 09226355035<br />
Email: tameraplazainn@gmail.com</div>
<p>&nbsp;</p>

  <div class="paperl">
  <?php
if (isset($_GET['id'])){
$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

$member_id = $_GET['id'];
			$result = mysql_query("SELECT * FROM reservation WHERE reservation_id = '$member_id'");

while($row = mysql_fetch_array($result))
  {
  echo '<br />';
  echo '<b>'.'Booker Personnal Information'.'</b>';
  echo '<br />';
  echo "FirstName: ".$row['firstname']. "<br />"; 
  echo "LastName: ".$row['lastname']. "<br />"; 
  echo "Address: ".$row['province']. "<br />"; 
  echo "City: ".$row['city']. "<br />"; 
  echo "Zip: ".$row['zip']. "<br />"; 
  echo "Country: ".$row['country']. "<br />"; 
  echo "Email: ".$row['email']. "<br />"; 
  echo "Telephone/Cellphone Number: ".$row['contact']. "<br />"; 
  echo '<br />';
  echo '<b>'.'Payment Information'.'</b>'.'<br />';
 /* echo 'Card Type: '.$row['cardtype'];
  echo '<br>';
   echo 'Card No.: '.$row['cardno'];
  echo '<br>';
   echo 'Expiry Date: '.$row['expiry'];
  echo '<br>';
   echo 'Name of Card Holder: '.$row['cardname'];
  echo '<br>';
   echo 'Security Code: '.$row['security'];*/
  echo '<br>';
 echo '<br />';
  echo '<b>'.'Reservation Details'.'</b>'.'<br />';
  echo "Arrival Date: ".$row['arrival']. "<br />"; 
  echo "Departure Date: ".$row['departure']. "<br />"; 
  echo "Confirmation Code: ".$row['confirmation']. "<br />";  
  echo "Number of night stay: ".$row['result']; 
  echo '<br />';
  echo '<br />';
  echo '<b>'.'Rate Information'.'</b>'.'<br />';
  $q=$row['room_id'];
  $result1 = mysql_query("SELECT * FROM room WHERE room_id = '$q'");

while($row1 = mysql_fetch_array($result1))
  {
  echo "Room Type: ".$row1['type']. "<br />";
  echo "Room Rate: ".$row1['rate']. "<br />";
  }
  
  echo 'Total Payable amount: ';
  echo $row['payable'];
  
		
  }

mysql_close($con);
}
?>



</div>

<p>&nbsp; </p>
</body>
</html>
