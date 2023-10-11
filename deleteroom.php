
			<?php
				  if (isset($_GET['id']))
				{
					$messages_id = $_GET['id'];
					echo '<form action="deleteoption.php" method="POST">';
					echo '<input name="id" type="hidden" value="'. $messages_id . '" />';
					echo '<input name="id" type="hidden" value="'. $feedback_id . '" />';
					echo '<input name="id" type="hidden" value="'. $room_id . '" />';
					echo 'Are you sure you want to delete this room?';
					echo '<div>'.'<input name="yes" type="submit" value="Yes" /><input name="no" type="submit" value="No" />'.'</div>';
					echo '</form>';
			
				}
			?>
			
