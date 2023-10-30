<?php
include('includes/dbcon.php'); 
 include('session.php');
$get_id = $_GET['id'];
 
	$query = mysqli_query($conn,"select * from tbldevice 
		LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
		where id = '$get_id'")or die(mysqli_error($conn));
		$row = mysqli_fetch_array($query);
?>
<div class="hide">									
	<form class="form-horizontal" method="post">
									 
	<div class="control-group">
	  <label class="control-label" for="inputEmail">Device Name</label>
		<div class="controls">			
			<select id="qtype" name="dev_id" readonly="readonly" required>

			<option value="<?php echo $row['dev_id']; ?>" ><?php echo $row['dev_name']; ?></option>
				<?php
				$device_query = mysqli_query($conn,"select * from tbldevice_name")or die(mysqli_error($conn));
				while($query_device_row = mysqli_fetch_array($device_query)){
				$dev_name = $row['dev_name'];
				?>
				<option value="<?php echo $query_device_row['dev_id']; ?>"><?php echo $query_device_row['dev_name'];  ?></option>
				<?php } ?>

				</select>
			</div>
      </div>
<div class="control-group">
	  <label class="control-label" for="inputEmail">Device Serial</label>
		<div class="controls">			
			<select id="qtype" name="dev_serial" readonly="readonly" required>

			<option value="<?php echo $row['id']; ?>" ><?php echo $row['dev_serial']; ?></option>
				<?php
				$device_query = mysqli_query($conn,"select * from tbldevice")or die(mysqli_error($conn));
				while($query_device_row = mysqli_fetch_array($device_query)){
				$dev_serial = $row['dev_serial'];
				?>
				<option value="<?php echo $query_device_row['id']; ?>"><?php echo $query_device_row['dev_serial'];  ?></option>
				<?php } ?>

				</select>
			</div>
      </div>	  
</form>
</div>
<?php 
mysqli_query($conn,"update tbldevice set dev_status='Repaired' where id = '$get_id'")or die(mysqli_error($conn));
mysqli_query($conn,"insert into tblactivity_log (date,username,action) values(NOW(),'$client_fullname ','Repair Device $dev_name Inventory Code:$dev_serial')")or die(mysqli_error($conn));						
 ?>	