<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['Id']) ||(trim ($_SESSION['Id']) == '')) {
	header("location: index.php");
    exit();
}
else{
$session_id=$_SESSION['Id'];

$user_query ="select * from tbltechnician where technician_id = '$session_id'";
$query = $conn->query($user_query);
$user_row = $query->fetch_assoc();
$client_fullname =$user_row['firstName']." ".$user_row['lastName'];
}
?>