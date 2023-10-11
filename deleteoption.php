<?php
				  if (isset($_POST['yes']))
	{
			$con = mysql_connect("localhost", "root", "");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("argie_tamera", $con);
			$messages_id = $_POST['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("DELETE FROM room WHERE room_id='$messages_id'");
			header("location: home_admin.php#4");
			exit();
			
			mysql_close($con);
			}
			 if (isset($_POST['no']))
	{
			
			header("location: home_admin.php#4");
			exit();
		
			}
			?>