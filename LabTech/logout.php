<?php
include('includes/dbcon.php');
include('session.php');

$oras = strtotime("now");
$ora = date("Y-m-d",$oras);										
$sql= "update tbluser_log set
logout_date = '$ora'												
where user_log_id = '$session_id' ";
$query = $conn->query($sql);
session_destroy();
header('location:index.php'); 
?>