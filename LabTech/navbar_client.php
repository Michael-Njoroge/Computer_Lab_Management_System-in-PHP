
  <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">Welcome To: Maseno University Lab Management System</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
						<?php $query= "select * from tbltechnician where technician_id = '$session_id'";
                        $result= mysqli_query($conn,$query);
							  $row = mysqli_fetch_array($result);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img id="avatar1" class="img-responsive" src="img/logo.png">&nbsp;<?php echo $row['firstName']." ".$row['lastName'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                       <a tabindex="-1" href="change_password_client.php"><i class="icon-cog"></i>&nbsp;Change Password</a>
                                     </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
		<?php include('change_picture.php'); ?>		