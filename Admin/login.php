<?php
	session_start();
	include 'includes/dbcon.php';

	if(isset($_SESSION['userId'])) {
		header('location:home.php');	
	}
	

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password)) {
			if($email == "") {
				$_SESSION['error'] = "Email is required";
			} 
		if($password == "") {
			$_SESSION['error'] = "Password is required";
		}
	} else {

		$sql = "SELECT * FROM tbladmin WHERE emailAddress = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows == 1) {
			$password = md5($password);

			$mainSql = "SELECT * FROM tbladmin WHERE emailAddress = '$email' AND password = '$password'";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['id'];

				// set session
				$_SESSION['userId'] = $user_id;

				header('location: home.php');

			} else{
				
				$_SESSION['error'] = "Incorrect username/password combination";
			} // /else
		} else {		
			$_SESSION['error'] = "Username doesnot exists";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>