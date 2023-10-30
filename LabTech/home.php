<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('client_sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= "select * from tbltechnician where technician_id = '$session_id'";
                         $result= mysqli_query($conn,$query);
						   $row = mysqli_fetch_array($result);
						 ?>
				         <div class="col-lg-12">
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <img id="avatar1" class="img-responsive" src="img/logo.png"><strong> Welcome!</strong> <?php echo $row['firstName']." ".$row['lastName'];  ?>
                          </div>
                        </div>
					   				
					  <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
							
                           <div class="block-content collapse in">
				           <div class="span12">
									
				               <div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $stocks = "SELECT * FROM tbldevice
	     LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id" ;
         $result= mysqli_query($conn,$stocks);
         if($result){
		 $stocks = mysqli_num_rows($result);
         
         }
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div>All Stocked</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="device_stocks.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	          $new = "select * from tbldevice
              LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
              where dev_status='New'";
          $result= mysqli_query($conn,$new);
              $new = mysqli_num_rows($result);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $new;?></div>
                                        <div>New Device</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="newdevice.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">
		 <?php 
	     $damage = "select * from tbldevice
	     LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
		 where dev_status='Damage'";
     $result= mysqli_query($conn,$damage);
		 $damage = mysqli_num_rows($result);
		 ?>	
			 <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-times-circle fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $damage;?></div>
                                        <div>Damage Device</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="damage.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	       $Repaired = "select * from tbldevice
           LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
           where dev_status='Repaired'";
       $result= mysqli_query($conn,$Repaired);
           $Repaired = mysqli_num_rows($result);
		 ?>				
					<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-wrench fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $Repaired;?></div>
                                        <div>Repaired Device</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="device_stocks.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>   				
              </div>	       
        </div>  	
<div id="page-wrapper">
           <div class="row-fluid">
        <?php 
	      $dump = "select * from tbldevice
          LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
          where dev_status='Dump'";
      $result= mysqli_query($conn,$dump);
          $dump = mysqli_num_rows($result);
		 ?>			   
			<div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-support fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $dump;?></div>
                                        <div>Dump Device</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="dump_device.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	  	     $location = "select * from tbllocation";
               $result= mysqli_query($conn,$location);
                 $location = mysqli_num_rows($result);
		 ?>			
					<div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-sitemap fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $location;?></div>
                                        <div>Location</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="device_location.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>         			  
      </div>
 </div>

               
				
				
			                 </div>	
					     
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />		
</html>