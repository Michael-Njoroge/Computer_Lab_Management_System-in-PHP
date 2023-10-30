<?php
include('includes/dbcon.php'); 
if (isset($_POST['delete_log'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$delete = "DELETE FROM tblactivity_log where activity_log_id='$id[$i]'";
	$result= mysqli_query($conn,$delete);

}
header("location: activity_log.php");
}
?>