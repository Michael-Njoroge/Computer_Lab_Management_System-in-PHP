
<?php
session_start();
include ("includes/dbcon.php") ;

if (isset($_SESSION['userId'])){
  $sql = "SELECT * FROM tbltechnician WHERE Id = '".$_SESSION['userId']."'";
  $query = $conn->query($sql);
  $userId = $query->fetch_assoc();
}
else{
  echo "<script type = \"text/javascript\">
  window.location = (\"index.php\");
  </script>";

}



// $expiry = 1800 ;//session expiry required after 30 mins
// if (isset($_SESSION['LAST']) && (time() - $_SESSION['LAST'] > $expiry)) {

//     session_unset();
//     session_destroy();
//     echo "<script type = \"text/javascript\">
//           window.location = (\"index.php\");
//           </script>";

// }
// $_SESSION['LAST'] = time();
    
?>