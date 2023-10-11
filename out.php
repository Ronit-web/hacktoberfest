<?php
				  if (isset($_GET['id']))
	{
			$con = mysql_connect("localhost", "root", "");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("argie_tamera", $con);
			$messages_id = $_GET['id'];
                                                                 $result3 = mysql_query("SELECT * FROM reservation where reservation_id ='$messages_id'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
$res=$row3['confirmation'];
                                                                   }
			$update1=mysql_query("UPDATE reservation SET status ='out' WHERE reservation_id ='$messages_id'");
                        $update2=mysql_query("UPDATE roominventory SET status ='out' WHERE confirmation = '$res'");
header("location: home_admin.php#1");
			
			exit();
			
			mysql_close($con);
			}
			?>