<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>
<body>
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
			$result2 = mysql_query("SELECT * FROM comment where comment_id ='$messages_id'");
								
								
								while($row = mysql_fetch_array($result2))
								  {
								  echo $row['content'];
								  }
			
			}
			?>

</body>
</html>
