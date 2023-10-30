<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Device</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
		                            </div>
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Device Name</label>
			                                <div class="controls">
				                              <select name="dev_id" class="chzn-select"  required/>
				                                 <option></option>
			                                       <?php $device_name = "select * from tbldevice_name";
												   		$result= mysqli_query($conn,$device_name);
 
			                                        while ($row=mysqli_fetch_array($result)){ 
													$dev_name = $row['dev_name'];
													?>
				                                    <option value="<?php echo $row['dev_id']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
				                                     <?php } ?>
				                                </select>
		                                     </div>
	                                    </div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Device Brand</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_brand" id="inputPassword" placeholder="Device Brand" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Inventory Code</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_serial" id="inputPassword" placeholder="Device Serial Number" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Device Model</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_model" id="inputPassword" placeholder="Device Model" required>
											</div>
										</div>
										
										<div id="hide">
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Device Status" >Device Status</label>
											<div class="controls">
											<select name="dev_status"  required>										
													<option>New</option>																									
												</select>								
											</div>
										</div>
										</div>
												
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="dev_desc" id="ckeditor_full"></textarea>
											</div>
										</div>
												
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
							</form>
<?php
if (isset($_POST['save'])){
$dev_id = $_POST['dev_id'];
$dev_desc = $_POST['dev_desc'];
$dev_serial = $_POST['dev_serial'];
$dev_brand = $_POST['dev_brand'];
$dev_model = $_POST['dev_model'];
$dev_status = $_POST['dev_status'];
										
						
$query = "select * from tbldevice where dev_serial = '$dev_serial' ";
$result= mysqli_query($conn,$query);

$count = mysqli_num_rows($result);

if ($count > 0){ ?>
<script>
alert('Device Code already Exist');
window.location = "device_stocks.php";
</script>
<?php
}else{
$sql="insert into tbldevice (dev_id,dev_desc,dev_serial,dev_brand,dev_model,dev_status) values('$dev_id','$dev_desc','$dev_serial','$dev_brand','$dev_model','$dev_status')";
$result= mysqli_query($conn,$sql);
$client_fullname=$user_row['firstName']." ".$user_row['lastName'];	
$query1="insert into tblnotification (fullname,notification,date_of_notification,link) value('$client_fullname','Add device id $dev_id, Serial Number: $dev_serial',NOW(),'device_stocks.php')";
$result= mysqli_query($conn,$query1);

?>
<script>
window.location = "device_stocks.php";
$.jGrowl("Device Successfully added", { header: 'Device add' });
</script>
<?php
}
}
?>
																										
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>