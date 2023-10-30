<?php  include('header.php'); ?>
<?php  include('session.php'); 
ini_set('display_errors', 0);
 error_reporting(0) ;
  ?>
<?php
header('refresh: 20; notification.php');
?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('notification_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							 <div class="muted pull-left"><i class="icon-globe"></i> Notification</div>                               
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
			
                 	
<form action="read.php" method="post">
					<?php if($not_read == '0'){
								}else{ ?>
							<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
							
						<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
						</div>
	
					<?php } ?>
				
					   <?php $query = mysqli_query($conn,"select * from tblnotifications order by tblnotifications.date_of_notification DESC")or die(mysqli_error($conn));
										$count = mysqli_num_rows($query);
					                    if ($count  > 0){
					                    while($row = mysqli_fetch_array($query)){
					                    $get_id = $row['fullname'];		                  
					                    $id = $row['notification_id'];
				
					                    $query_yes_read = mysqli_query($conn,"select * from tblnotification_read where notification_id = '$id' and admin_id = '$session_id'")or die(mysqli_error($conn));
					                    $read_row = mysqli_fetch_array($query_yes_read);				
					                    $yes = $read_row['admin_read'];
					   ?>
					
					
					<div class="post"  id="del<?php echo $id; ?>">
										<?php if ($yes == 'yes'){
										}else{
										?>
										<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php } ?>	
										<strong><?php echo $row['fullname'];  ?></strong>						
										<?php echo $row['notification']; ?>&nbsp;&nbsp;view in
										<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
										<?php echo $row['link']; ?>
										</a>
											
							<hr>										
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										<div class="pull-right">
										<a class="btn btn-link"  href="#<?php echo $id; ?>" data-toggle="modal" ><i class="icon-trash"></i> Remove </a>
									    </div>								
									    <?php include("remove_notification_modal.php"); ?>						
					  
					</div>
					
					<?php
					} }else{
					?>
					<div class="alert alert-info"><strong><i class="icon-info-sign"></i> No Notifications Found</strong></div>
					<?php
					}
					?>
					
</form>

<script type="text/javascript">
	$(document).ready( function() {
		$('.remove').click( function() {
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_notification.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Notification is Successfully Deleted", { header: 'Data Delete' });	
			}
			}); 		
			return false;
		});				
	});
</script>						
                                </div>
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