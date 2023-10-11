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
			$result = mysql_query("SELECT * FROM amenities WHERE amenities_id = $messages_id");
			while($row = mysql_fetch_array($result))
			{
			echo '<div style="width: 280px;" align="center">';
			echo "<img alt='Unable to View' src='" . $row["pic"] . "'>";
			echo '</div>';
			echo '<div style="width: 280px;" align="justify">';
			echo $row['des'];
			echo '</div>';
			}
			
			mysql_close($con);
			}
			?>