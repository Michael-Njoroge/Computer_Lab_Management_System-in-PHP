				
	 				<?php $query_yes_dump = "select * from tbldevice where dev_status = 'Dump'";
					                         $result= mysqli_query($conn,$query_yes_dump);
					$count_dump_no = mysqli_num_rows($result);

		
		            ?>
					<?php $query_no_dump = "select * from tbldevice where dev_status = 'none'";
					                         $result= mysqli_query($conn,$query_no_dump);
					$count_yes_dump = mysqli_num_rows($result);
					
		            ?>
					
					<?php $not_read_dump = $count_dump_no -  $count_yes_dump; ?>
