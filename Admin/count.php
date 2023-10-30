				
	 				<?php 
					$query_yes = mysqli_query($conn,"select * from tblnotifications order by tblnotifications.date_of_notification DESC")or die(mysqli_error($conn));
 
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					
					<?php 
					$query_no = mysqli_query($conn,"select * from tblnotifications 
					LEFT JOIN tblnotification_read ON tblnotification_read.notification_id = tblnotifications.notification_id
					where tblnotification_read.admin_id  = '$session_id'")or die(mysqli_error($conn));
					$count_yes = mysqli_num_rows($query_no);					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>
