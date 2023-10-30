				
	 				<?php $query_yes_new = "select * from tbldevice		            
		             where NOT EXISTS 
	                (select * from tbllocation_details where tbldevice.id = tbllocation_details.id)
		             and dev_status='new' ORDER BY tbldevice.id DESC";
					 $result= mysqli_query($conn,$query_yes_new);
					$count_no_new = mysqli_num_rows($result);

		
		            ?>
					<?php $query_no_new = "select * from tbldevice		            
		            where NOT EXISTS 
	                (select * from tbllocation_details where tbldevice.id = tbllocation_details.id)
		            and dev_status='none' ORDER BY tbldevice.id DESC";
					$result= mysqli_query($conn,$query_no_new);
					$count_yes_new = mysqli_num_rows($result);
					
		            ?>
					
					<?php $not_read_new = $count_no_new -  $count_yes_new; ?>
