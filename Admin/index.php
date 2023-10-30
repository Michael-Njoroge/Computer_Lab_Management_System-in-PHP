<?php
	session_start();
	require_once 'includes/dbcon.php';
	
if(isset($_SESSION['admin_id'])) {
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
	}
	if(empty($email) && empty($password)){
		$_SESSION['error'] = "Email and Password are required";
	}
	else {

		$sql = "SELECT * FROM tbladmin WHERE emailAddress = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows == 1) {
			$password = md5($password);

			$mainSql = "SELECT * FROM tbladmin WHERE emailAddress = '$email' AND password = '$password'";
			$mainResult = $conn->query($mainSql);

		 

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				
				$user_id = $value['admin_id'];
 
				// set session
				$_SESSION['admin_id'] = $user_id;

				header('location: home.php');


			} else{
				
				$_SESSION['error'] = "Incorrect Email/password combination";
			} // /else
		} else {		
			$_SESSION['error'] = "Email doesnot exists";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>

<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>
		MSU | Log Page
	</title>
	<link rel="shortcut icon" href="img/logo.png" />
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="css1/bootstrap.min.css" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css1/font-awesome.min.css" />
	<!-- Ionicons -->
	<link rel="stylesheet" href="css1/ionicons.min.css" />
	<!-- Theme style -->
	<link rel="stylesheet" href="css1/AdminLTE.min.css" />
	<!-- iCheck -->
	<link rel="stylesheet" href="/university/plugins/iCheck/square/blue.css" />

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />


</head>

<body class="hold-transition login-page">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="ctl01">


		<div class="login-box">

			<div class="col-md-12">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-aqua-active">
						<h3 class="widget-user-username text-center">Department Chair Panel</h3>

					</div>
					<div class="widget-user-image">

						<img class="img-circle" src="img/logo.png"  >
					</div>
					<div class="box-footer">
						<div class="row">
							<!-- /.col -->
							<div class="form-horizontal">
								<form class="form-login" name="login" method="post">
									<div class="box-body">
										<span id="MainContent_lblError" class="label label-warning"></span>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
											<div class="col-sm-10">
												<input name="email" type="email" id="MainContent_txtusername"  class="form-control" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
											<div class="col-sm-10">
												<input name="password" id="MainContent_txtpass" class="form-control"  placeholder="Password" type="password" />
											</div>
										</div>
										<div class="box-footer">
											<button id="MainContent_lbtnLogin" class="btn btn-primary pull-left" name="login" type="submit"></i> Sign In</button>
											<a href="../index.php" class="btn btn-primary btn-animated pull-right">Back to home</a>

											<div class="box-footer">
											</div>
										</div>
									</div>
									<!-- /.row -->
							</div>
						</div>
						<!-- /.widget-user -->
					</div>

				</div>
				<!-- /.login-box-body -->
			</div>
			<!-- /.login-box -->
			</script>
	</form>

	
	<?php
	if (isset($_SESSION['error'])) {
		echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
		unset($_SESSION['error']);
	}
	?>
	</div>
</div>

	<?php include 'includes/scripts.php' ?>
	
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
</body>

</html>