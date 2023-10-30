<?php
include('includes/dbcon.php'); 
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

	mysqli_query($conn,"insert into tblnotification_read (admin_id,admin_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysqli_error($conn));
	
	
	
}
?>
<script>
window.location = 'notification.php';
</script>
<?php
}
?>