<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="js/jquery-1.2.1.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing.1.2.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
	<script src="js/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
		let mybutton = document.getElementById("topBtn");

			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop >30) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
		</script>
	
	<style type="text/css">
<!--
a img {border: none; }
-->
</style>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #006600;
}
a:active {
	text-decoration: none;
	color: #006600;
}
-->
</style>


</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l">
	<div style="margin-top: 225px; margin-right: 10px;">
	 <?php
if ($_SESSION['SESS_FIRST_NAME']=="admin"){
	
  echo '<a href="#2" class="cross-link">View Booker Comments</a><br />';
  echo '<a href="#1" class="cross-link">Monitor Reservation</a><br />';
  echo '<a href="#3" class="cross-link">Generate Reports</a><br />';
  echo '<a href="#5" class="cross-link">Room Inventory</a><br />';
  echo '<a href="#4" class="cross-link">Rooms</a><br />';
  echo '<a href="admin_index.php">logout</a><br />';
 
 }
 ?> 
 <?php
if ($_SESSION['SESS_FIRST_NAME']=="frontdesk"){
	
  echo '<a href="#2" class="cross-link">View Booker Comments</a><br />';
  echo '<a href="#1" class="cross-link">Monitor Reservation</a><br />';
  echo '<a href="#3" class="cross-link">Generate Reports</a><br />';
  echo '<a href="admin_index.php">logout</a><br />';
 }
 ?> 
	</div>
	
	
	</div>
	<div class="r">
	
	
	
	<button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>
<div class="right3">
  
    <div class="slider-wrap">
      <div id="slider1" class="csw">
        <div class="panelContainer">
          <div class="panel" title="Panel 1">
            <div class="wrapper">
			  <div class="view">
			  <table id="mytable" cellspacing="0">
  <tr>
    <td width="191" id="label">Name</td>
    <td width="73" id="label">Arrival</td>
    <td width="85" id="label">Departure</td>
    <td width="96" id="label">Room Type </td>
    <td width="105" id="label">No. of Nights</td>
    <td width="90" id="label">Action</td>
  </tr>
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("argie_tamera", $con);
								
								$result2 = mysql_query("SELECT * FROM reservation where status != 'out'");
								
								
								while($row = mysql_fetch_array($result2))
								  {
								 echo '<tr>';
    								echo '<td class="contacts">'.$row['firstname'].' ' .$row['lastname'].'</td>';
    								echo '<td class="contacts">'.$row['arrival'].'</td>';
									echo '<td class="contacts">'.$row['departure'].'</td>';
									echo '<td class="contacts">';
									$r=$row['room_id'];
									$result1 = mysql_query("SELECT * FROM room WHERE room_id = '$r'");
			while($row1 = mysql_fetch_array($result1))
			{
			echo $row1['type'];
			}
									echo '</td>';
									echo '<td class="contacts">'.$row['result'].'</td>';
									echo '<td class="contacts">'.'<a href=out.php?id=' . $row["reservation_id"] . '>' . 'Check Out' . '</a>'.'</td>';
  								echo '</tr>';
							
								  }
			  
			  ?>
			  </table>
			  </div>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 2">
            <div class="wrapper">
			<table id="mytable" cellspacing="0">
  <tr>
    <td width="207" id="label">Name</td>
    <td width="322" id="label">Email Address</td>
    <td width="126" id="label">Action</td>
  </tr>
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("argie_tamera", $con);
								
								$result3 = mysql_query("SELECT * FROM comment");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
    								echo '<td class="contacts">'.$row3['name'].'</td>';
    								echo '<td class="contacts">'.$row3['email'].'</td>';
									echo '<td class="contacts">'.'<a rel="facebox" href=viewcomment.php?id=' . $row3["comment_id"] . '>' . 'Read Message' . '</a>'.'</td>';
  								echo '</tr>';
							
								  }
			  
			  ?>
			  </table>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 3">
            <div class="wrapper">
              <div class="view">
			  <table id="mytable" cellspacing="0">
  <tr>
    <td width="191" id="label">Name</td>
    <td width="73" id="label">Arrival</td>
    <td width="85" id="label">Departure</td>
    <td width="96" id="label">Room Type </td>
    <td width="105" id="label">No. of Nights</td>
    <td width="90" id="label">Action</td>
  </tr>
              <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("argie_tamera", $con);
								
								$result2 = mysql_query("SELECT * FROM reservation where status != 'out'");
								
								
								while($row = mysql_fetch_array($result2))
								  {
								 echo '<tr>';
    								echo '<td class="contacts">'.$row['firstname'].' ' .$row['lastname'].'</td>';
    								echo '<td class="contacts">'.$row['arrival'].'</td>';
									echo '<td class="contacts">'.$row['departure'].'</td>';
									echo '<td class="contacts">';
									$r=$row['room_id'];
									$result1 = mysql_query("SELECT * FROM room WHERE room_id = '$r'");
			while($row1 = mysql_fetch_array($result1))
			{
			echo $row1['type'];
			}
									echo '</td>';
									echo '<td class="contacts">'.$row['result'].'</td>';
									echo '<td class="contacts">'.'<a href=viewreservation.php?id=' . $row["reservation_id"] . '>' . 'Preview' . '</a>'.'</td>';
  								echo '</tr>';
							
								  }
			  
			  ?>
			  </table>
			  </div>
            </div>
          </div>
		  
		  
		  
		  
		  
          <div class="panel" title="Panel 4">
            <div class="wrapper">
              <div class="view">
			  <table id="mytable" cellspacing="0">
				  <tr>
					<td width="93" id="label">Type</td>
					<td width="44" id="label">Rate</td>
					<td width="298" id="label">Descripton</td>
					<td width="72" id="label">Image</td>
					<td width="51" id="label">Quantity</td>
					<td width="80" id="label">Action</td>
				  </tr>
				  <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("argie_tamera", $con);
								
								$result3 = mysql_query("SELECT * FROM room");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['type'].'</td>';
									echo '<td>'.$row3['rate'].'</td>';
									echo '<td>'.$row3['description'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=editpic.php?id=' . $row3["room_id"] . '>' . '<img width=72 height=52 alt="Unable to View" src=' . $row3["image"] . '>' . '</a>';
								
									echo '</td>';
									echo '<td>'.$row3['qty'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=editroom.php?id=' . $row3["room_id"] . '>' . 'Edit' . '</a>';
									echo ' | ';
									echo'<a rel="facebox" href=deleteroom.php?id=' . $row3["room_id"] . '>' . 'Delete' . '</a>';
									echo '</td>';
								 echo '</tr>';
							
								  }
			  
			  ?>
			  
			  
			  </table><br />
			  <a rel="facebox" href="addroom.php">Add Room
			  
			  </a></div>
            </div>
          </div>
		  
		  
		  
		

 <div class="panel" title="Panel 5">
            <div class="wrapper">

			<div class="view">
			  <table id="mytable" cellspacing="0">
				  <tr>
					<td width="93" id="label">Arrival</td>
					<td width="44" id="label">Departure</td>
					<td width="100" id="label">Quantity Reserve</td>
					<td width="149" id="label">Room Type</td>
					<td width="180" id="label">Confirmation Number</td>
                                        <td width="80" id="label">Status</td>
				  </tr>
				  <?php
			   $con = mysql_connect("localhost", "root", "");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("argie_tamera", $con);
								
								$result3 = mysql_query("SELECT * FROM roominventory where status != 'out'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['arrival'].'</td>';
									echo '<td>'.$row3['departure'].'</td>';
									echo '<td>'.$row3['qty_reserve'].'</td>';
									
									echo '<td>';
                                                               $ro=$row3['room_id'];
                                                             $result4 = mysql_query("SELECT * FROM room where room_id='$ro'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
echo $row4['type'];
                                                                  }


									echo '</td>';
                                                                        echo '<td>'.$row3['confirmation'].'</td>';
                                                                        echo '<td>'.$row3['status'].'</td>';
								 echo '</tr>';





								  }




							$result5 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='6'");
				                        while($row5 = mysql_fetch_array($result5))
				                           {
echo 'Toal reserve Room of Superior Room: ';
echo $row5['sum(qty_reserve)'];
echo '<br>';
                                                           }
$result6 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='7'");
				                        while($row6 = mysql_fetch_array($result6))
				                           {
echo 'Toal reserve Room of Deluxe Room: ';
echo $row6['sum(qty_reserve)'];
echo '<br>';
                                                           }
$result7 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='8'");
				                        while($row7 = mysql_fetch_array($result7))
				                           {
echo 'Toal reserve Room of Standard Single Room: ';
echo $row7['sum(qty_reserve)'];
echo '<br>';
                                                           }
$result8 = mysql_query("SELECT sum(qty_reserve) FROM roominventory where status != 'out' and room_id='9'");
				                        while($row8 = mysql_fetch_array($result8))
				                           {
echo 'Toal reserve Room of Standard Single Room: ';
echo $row8['sum(qty_reserve)'];
echo '<br>';
                                                           }


			  
			  ?>
			  
			  
			  </table><br />
	
			  
			  </div>
            </div>
          </div>


  
		  
		  
		  
		  
        </div>
        <!-- .panelContainer -->
      </div>
      <!-- #slider1 -->
    </div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother"></div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
</body>
</html>
