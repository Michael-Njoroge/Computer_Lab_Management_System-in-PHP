 <?php
 include('dbcon.php'); 
  include('session.php');
  $result== $_POST['new_password'];
 $new_password = md5('$result');

 mysqli_query($conn,"update tbladmin set password = '$new_password' where admin_id = '$session_id'")or die(mysqli_error());
 ?>