<?php
include('includes/dbcon.php');
if (isset($_POST['delete_dev_name'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$sql = "DELETE FROM tbldevice_name where dev_id='$id[$i]'";
	$result= mysqli_query($conn,$sql);

}
header("location: dev_name.php");
}
?>