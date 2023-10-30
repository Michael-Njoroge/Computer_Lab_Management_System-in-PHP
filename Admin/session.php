<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['admin_id']) ||(trim ($_SESSION['admin_id']) == '')) {
	header("location: index.php");
    exit();
}
$session_id=$_SESSION['admin_id'];

$user_query = mysqli_query($conn,"select * from tbladmin where admin_id = '$session_id'")or die(mysqli_error($conn));
$user_row =mysqli_fetch_array($user_query);
$admin_username =$user_row['firstName']." ".$user_row['lastName'];
?>