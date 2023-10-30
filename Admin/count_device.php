<?php 
	$my_device = mysqli_query($conn,"select * from tbllocation_details    
	LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
	LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
	where NOT EXISTS 
    (select * from tbllocation_details where dev_status='Dump')
    and tbldevice_id = '$stdev_id' ");
 
	$count_yes = mysqli_num_rows($my_device);
?>

<?php 
	$result = mysqli_query($conn,"select * from tbllocation_details    
	LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
	LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
	where NOT EXISTS 
    (select * from tbllocation_details where dev_status='Dump')
    and tbldevice_id =''");
 
	$count_no = mysqli_num_rows($result);
	?>

<?php $not_count = $count_yes -  $count_no; ?>