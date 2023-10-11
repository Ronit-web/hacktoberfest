<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php
$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);
$confirm = $_POST['confirm'];
$result = mysql_query("SELECT * FROM reservation where confirmation='$confirm'");
while($row = mysql_fetch_array($result))
  {	
	$arival = $row['arrival'];
	$departure = $row['departure'];
	$adults = $row['adults'];
	$child = $row['child'];
	$confirmation=$row['confirmation'];
	}	
	
?>

<!--sa minus date-->
<script type="text/javascript">
	// Error checking kept to a minimum for brevity
 
	function setDifference(frm) {
	var dtElem1 = frm.elements['start'];
	var dtElem2 = frm.elements['end'];
	var resultElem = frm.elements['result'];
	 
// Return if no such element exists
	if(!dtElem1 || !dtElem2 || !resultElem) {
return;
	}
	 
	//assuming that the delimiter for dt time picker is a '/'.
	var x = dtElem1.value;
	var y = dtElem2.value;
	var arr1 = x.split('/');
	var arr2 = y.split('/');
	 
// If any problem with input exists, return with an error msg
if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
resultElem.value = "Invalid Input";
return;
	}
	 
var dt1 = new Date();
dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
var dt2 = new Date();
dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
}
</script>

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["room"]["no_rooms"].value;
if ((y==null || y==""))
  {
  alert("all field are required!");
  return false;
  }
}
</script>

<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">
  <form action="personalinfoedit.php" method="post" onsubmit="return validateForm()" name="room">
  <input name="start" type="hidden" value="<?php echo $arival; ?>" />
  <input name="end" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="confirmation" type="hidden" value="<?php echo $confirmation; ?>" />
  
  <label style="margin-left: 119px;">Number of rooms: </label><INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" name="no_rooms" class="ed">
 <span id="errmsg"></span>
  <br />
  <br />
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tamera", $con);

$result = mysql_query("SELECT * FROM room");

while($row = mysql_fetch_array($result))
  {
  $a=$row['room_id'];
  $query = mysql_query("SELECT sum(qty_reserve) FROM roominventory where arrival <= '$arival' and departure >= '$departure' and room_id='$a'");
while($rows = mysql_fetch_array($query))
  {
  $inogbuwin=$rows['sum(qty_reserve)'];
  }
  $angavil = $row['qty'] - $inogbuwin;
  echo '<div style="height: 117px;">';
	  echo '<div style="float: left; width: 100px; margin-left: 19px;">';
	  echo "<img width=92 height=72 alt='Unable to View' src='" . $row["image"] . "'>";
	  echo '</div>';
	  echo '<div style="float: right; width: 575px; margin-top: -10px;">';
	  echo '<span class="style5">'.'Avalable Rooms: '.$angavil.'</span>';
	  if ($angavil > 0){
					echo '<input name="roomid" type="checkbox" value="' .$row["room_id"]. '" />';
					echo '<input type="submit" name="Submit" value="reserve" onclick="setDifference(this.form);"/>';
					}
				if ($angavil <= 0){
				echo '<span class="style5">'.'wala chansa wala gid vacant'.'</span>';
				}	
	  echo '<br>';		
	  echo '<span class="style5">'.'Room Type: '.$row['type'].'</span><br>';
	  echo '<span class="style5">'.'Room Rate: '.$row['rate'].'</span><br>';
	  echo '<span class="style5">'.'Room Description: '.$row['description'].'</span><br>';
	  echo '</div>';
  echo '</div>';
}

mysql_close($con);
?> 
<input type="hidden" name="result" id="result" />
</form>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 16px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 3px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 71px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 78px;">Child : <?php echo $child; ?></label><br />
      <BR />
  </div>
	
	
	</div>
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
</body>
</html>
