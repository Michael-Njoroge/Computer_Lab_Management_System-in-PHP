				
	 				<?php 
					$query_yes1 = "SELECT * from tbldevice where dev_status = 'damage'";
					$result= mysqli_query($conn,$query_yes1);
					if($result){
						$count_no = mysqli_num_rows($result);
						}


		
		            ?>
					<?php 
					$query_no ="select * from tbldevice where dev_status = 'none'";
					$result= mysqli_query($conn,$query_no);
					if($result){
						$count_yes = mysqli_num_rows($result);
						}
					
		            ?>
					
					<?php $not_read1 = $count_no -  $count_yes; ?>
