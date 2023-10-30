
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add New Technical Staff</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="email" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input type="password" class="input focused" name="password" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>				 
					<?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$pass = $_POST['password'];
$password = md5($pass);


$query = $result= mysqli_query($conn,"select * from tbltechnician where emailAddress = '$username' and password = '$password' and firstName = '$firstname' and password = '$password' ");
 
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
$insert= mysqli_query($conn,"insert into tbltechnician (firstname,lastname,emailAddress,password) values('$firstname','$lastname','$username','$password')");
 

$activity=mysqli_query($conn,"insert into tblactivity_log (date,username,action) values(NOW(),'$admin_username','Add Client User $firstName')");
?>
<script>
window.location = "client_user.php";
$.jGrowl("Client User Successfully added", { header: 'Client User add' });
</script>
<?php
}
}
?>