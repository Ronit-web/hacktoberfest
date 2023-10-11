<?php

			$con = mysql_connect("localhost", "root", "");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("argie_tamera", $con);
			$confirmation = $_POST['confirmation'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("DELETE FROM reservation WHERE confirmation='$confirmation'");
			header("location: index.php");
			exit();
			
			mysql_close($con);
			
?>