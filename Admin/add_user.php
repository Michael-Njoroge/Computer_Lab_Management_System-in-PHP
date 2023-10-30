   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add System User</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
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
                                            <input class="input focused" name="password" id="focusedInput" type="password" placeholder = "Password" required>
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

$query = "select * from tbladmin where emailAddress = '$username' and password = '$password' and firstName = '$firstname' and password = '$password' ";
$result= mysqli_query($conn,$query);

$count = mysqli_num_rows($result);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
$insert="insert into tbladmin (firstName,lastName,emailAddress,password) values('$firstname','$lastname','$username','$password')";
$result= mysqli_query($conn,$insert);


$insert1="insert into tblactivity_log (date,username,action) values(NOW(),'$admin_username','Add System User $firstName')";
$result= mysqli_query($conn,$insert1);

?>
<script>
window.location = "admin_user.php";
$.jGrowl("System User Successfully added", { header: 'System User add' });
</script>
<?php
}
}
?>