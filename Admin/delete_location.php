<?php
include('includes/dbcon.php'); 
 
if (isset($_POST['delete_location'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$hhey = "DELETE FROM tbllocation where stdev_id='$id[$i]'";
	$result= mysqli_query($conn,$hhey);

}
header("location: location.php");
}
?>