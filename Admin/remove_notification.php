<?php include('include/dbcon.php'); 
?>
<?php
$id = $_POST['id'];
$delete="delete from tblnotification where notification_id = '$id'";
$result= mysqli_query($conn,$delete);

?>

