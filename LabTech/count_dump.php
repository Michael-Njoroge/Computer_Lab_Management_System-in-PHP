				
	 				<?php 
					$query_yes_dump ="SELECT * from tbldevice where dev_status = 'Dump'";
					$result= mysqli_query($conn,$query_yes_dump);
					if($result){
						$count_dump_no = mysqli_num_rows($result);
						}
			 

		
		            ?>
					<?php $query_no_dump ="SELECT * from tbldevice where dev_status = 'none'";
						$result= mysqli_query($conn,$query_no_dump);
						if($result){
							$count_yes_dump = mysqli_num_rows($result);
							}
	 
					
		            ?>
					
					<?php $not_read_dump = $count_dump_no -  $count_yes_dump; ?>
