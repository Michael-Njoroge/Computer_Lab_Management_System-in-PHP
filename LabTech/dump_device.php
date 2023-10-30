<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dump_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysqli_query($conn,"select * from tbldevice 
				 LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				 where dev_status = 'Dump' OR dev_status = 'Damage' ORDER BY tbldevice.id DESC ");
	             $count = mysqli_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Dump device Stock (s) List</div>
                          <div class="muted pull-right">
								Number of Device: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Dump device Stock List
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>			  
 <br/>                 							  														
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_dump.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a>  
		 <script type="text/javascript">
		$(document).ready(function(){
		$('#print').tooltip('show');
		$('#print').tooltip('hide');
		});
		</script> 
       </div>
   </div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>								
                    					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysqli_query($conn,"select * from tbldevice			
		                     LEFT JOIN tbllocation_details ON tbldevice.id = tbllocation_details.tbldevice_id		
		                     LEFT JOIN tbllocation ON tbllocation_details.tbldevice_id = tbllocation.stdev_id
							 LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
							 where dev_status = 'Dump' ORDER BY tbllocation_details.ld_id DESC")or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysqli_query($conn,"select * from tbldevice ")or die(mysqli_error($conn));
		       $dev=mysqli_fetch_assoc($device_query1);
		       if($row['dev_status']=='Dump')
		       {
			   echo '<div class="alert alert-danger">&nbsp;<i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
		</tr>											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>
</html>