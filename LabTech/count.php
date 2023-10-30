				
	 				<?php 
					$query_yes = "select * from tblnotifications order by tblnotifications.date_of_notification DESC";
					$result= mysqli_query($conn,$query_yes);

					$count_no = mysqli_num_rows($result);
		            ?>
					
					<?php 
					$query_no = "select * from tblnotifications 
					LEFT JOIN tblnotification_read ON tblnotification_read.notification_id = tblnotifications.notification_id
					where tblnotification_read.admin_id  = '$session_id'";
					$result= mysqli_query($conn,$query_no);
					$count_yes = mysqli_num_rows($result);					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>
