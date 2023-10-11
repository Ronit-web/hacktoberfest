<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("argie_tamera") or die(mysql_error());





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$roomid=$_POST['firstname'];
			
			if(!$update=mysql_query("UPDATE room SET image = '$location' WHERE room_id='$roomid'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			header("location: home_admin.php#4");
			exit();
			}
			}
	}


?>