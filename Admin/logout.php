<?php
include('Includes/dbcon.php'); 
include('session.php');

session_start(); 

$oras = strtotime("now");
$ora = date("Y-m-d",$oras);	
mysqli_query($conn, "update tbluser_log set
logout_Date = '$ora'												
where admin_id = '$session_id' ")or die(mysqli_error($conn));

session_destroy(); // destroy session
header('location: index.php'); 

  ?>

