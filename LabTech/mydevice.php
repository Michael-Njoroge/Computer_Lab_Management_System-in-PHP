<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
 ini_set('display_errors', 0);
 error_reporting(0) ;
$get_id = $_GET['stdev_id']; ?><!-----------------------------------get device location details------------------------------------>	

    <body>
		<?php include('navbar_client.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('client_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Click to return" ><i class="icon-arrow-left icon-large"></i> Back</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#return').tooltip('show');
		              $('#return').tooltip('hide');
		              });
		             </script>
					 
					    <!-----------------------------------sc logo for print------------------------------------>	
						<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
						
						<?php $location_query = mysqli_query($conn,"select * from tbllocation	                     
	                     where stdev_id = '$get_id'")or die(mysqli_error($conn));
	                     $location_row = mysqli_fetch_array($location_query);
	                    ?>
						
            <!-------------------------------block ------------------------------>
            <div id="block_bg" class="block">
                  <div class="navbar navbar-inner block-header">							
							  <div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>
							  
                                <div id="" class="muted pull-right">
								<?php 
								$my_device = mysqli_query($conn,"select * from tbllocation_details    
	                            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
								LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
								where NOT EXISTS 
                                (select * from tbllocation_details where dev_status='Dump')
                                 and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
								$count_my_device = mysqli_num_rows($my_device);?>
								Number of Device: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
								</div>								
                    </div>
							
<!-----------------------------------for Print display visible------------------------------------>								
<h4 id="sc">Location:<?php echo $location_row['stdev_location_name']; ?> all device List
<div align="right" id="sc">Date:
<?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?></div>
</h4>

 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
 <!-----------------------------------device categorized by their location details using nav pills------------------------------------>	
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<?php	
	            $my_device = mysqli_query($conn,"select * from tbllocation_details	                                                    
                LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id 
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                 and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_device);
			    ?>
				<li class="active">
				<a href= 'mydevice.php<?php echo '?tbldevice_id='.$get_id; ?>')">All&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
					
				</li>
				
			<?php	
	          $my_keyboard = mysqli_query($conn,"select * from tbllocation_details    
	          LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
			  LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
			  where NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'Keyboard'  and tbldevice_id = '$get_id'
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'keyboard'    and tbldevice_id = '$get_id'
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
		      and dev_name = 'kyboard'   and tbldevice_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'kboard'      and tbldevice_id = '$get_id'
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'kbard'      and tbldevice_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'kbord'       and tbldevice_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = 'kbrd'      and tbldevice_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = '(keyboard)'  and tbldevice_id = '$get_id' 
			  OR NOT EXISTS 
             (select * from tbllocation_details where dev_status='Dump')
			  and dev_name = '(kbrd)'    and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
			  $count = mysqli_num_rows($my_keyboard);
			  ?>
              					
				<li class="">			
				    <a href= 'myKeyboard.php<?php echo '?tbldevice_id='.$get_id; ?>')">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_mouse = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump') 
			    and dev_name = 'Mouse'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'mouse'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'muse'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
               (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'mose'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'mse'       and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'MOUSE'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(Mouse)'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse/PS2'  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse/USB' and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse(PS2)' and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse(USB)'and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse-PS2'  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse-USB' and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse PS2'  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Mouse USB' and tbldevice_id = '$get_id' 
				")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_mouse);
               ?>
				<li class="">			
				    <a href= 'mymouse.php<?php echo '?tbldevice_id='.$get_id; ?>')">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>				
				
			  <?php	
	            $my_monitor = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Monitor'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'monitor'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'montor'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'monitr'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'mnitor'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'mntr'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'MNTR'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(monitor)' and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(montor)' and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_monitor);
               ?>
			   
				<li class="">			
				    <a href= 'mymonitor.php<?php echo '?tbldevice_id='.$get_id; ?>')">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				 <?php	
	            $my_cpu = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump') 
			    and dev_name = 'Central Processing unit (CPU)'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'central processing unit'          and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'central_processing_unit'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'cpu'       and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'c_p_u'                        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'c.p.u.'                           and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'cntral prcessing unit'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'centrl procesing unit'            and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'central processing nit'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'cenRal processing unt'            and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'cetral processin unit'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'cetral_processin_unit'            and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'centralprocessingunit'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(CPU)'                            and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'CENTRAL PROCESSING UNIT'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(Central Processing unit (CPU))'  and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_cpu);
               ?>
				<li class="">			
				    <a href= 'mycpu.php<?php echo '?tbldevice_id='.$get_id; ?>')">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
               <?php	
	            $my_power_supply = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Power Supply'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'power supply'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'pwer supply'    and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'power spply'     and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'pwer suply'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'poer Suply'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'powersupply'    and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'power_supply'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'power.supply'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'pwer.spply'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = '(power supply)' and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(powersupply)'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(power_supply)' and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(power-supply)'  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'POWER SUPPLY'   and tbldevice_id = '$get_id' ")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_power_supply);
               ?>			
				<li class="">			
				    <a href= 'mypower_supply.php<?php echo '?tbldevice_id='.$get_id; ?>')">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'Video Graphic Accelerator (VGA)'   and tbldevice_id = '$get_id' 
				 OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'VGA'                         and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = '(VGA)'                          and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Video.Graphic.Accelerator'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Video-Graphic-Accelerator'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Video_Graphic_Accelerator'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'VideoGraphicAccelerator'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Video Graphic'               and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'Vedio Graphic Acelerator'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'VIDEO GRAPHIC ACCELATOR'     and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'vido grphic'                 and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'viDo gRphic Accelarator'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'video graphic accelarator'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'vedeo graphic'                  and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'video graphic accelerator'   and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'videographicaccelerator'        and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'vedio graphic accelerator'   and tbldevice_id = '$get_id'")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_vga);
               ?>
				<li class="">			
				    <a href= 'myvga.php<?php echo '?tbldevice_id='.$get_id; ?>')">VGA&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_vga = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump') 
			    and dev_name = 'Power Cords'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump') 
				and dev_name = 'power cord'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump') 
			    and dev_name = 'power_cord'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(power cord)'  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'power.cord'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = '(pwer crd)'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'powr coRd'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'ower cord'     and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'power cordss'   and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'pwer crd'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'POWER CORD'     and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'poer cd'       and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'powercord'     and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
			    and dev_name = 'powe cor'       and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'power-cord'    and tbldevice_id = '$get_id'")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_vga);
               ?>				
				<li class="">			
				    <a href= 'mypower_cord.php<?php echo '?tbldevice_id='.$get_id; ?>')">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				<?php	
	            $my_avr = mysqli_query($conn,"select * from tbllocation_details    
	            LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id
				LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
				where NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				 and dev_name = 'AVR'                           and tbldevice_id = '$get_id'
				 OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				 and dev_name = 'A.V.R'                          and tbldevice_id = '$get_id'
				 OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Regulator'   and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automatic Voltage Reactor'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automatic_Voltage_Regulator'   and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Regulator'    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'avrs'                          and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automatic v.r'                  and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automatic voltage R.'          and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'avregulator'                    and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automatic Voltage Reactor'     and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automatic-Voltage-Reactor'      and tbldevice_id = '$get_id' 
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automaticVoltageReactor'       and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automaticVoltageRegulator'      and tbldevice_id = '$get_id'
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
                and dev_name = 'automtic Voltge Reactor'       and tbldevice_id = '$get_id'   
				OR NOT EXISTS 
                (select * from tbllocation_details where dev_status='Dump')
				and dev_name = 'automtic Voltge Regulator'      and tbldevice_id = '$get_id'
			    ")or die(mysqli_error($conn));
			    $count = mysqli_num_rows($my_avr);
               ?>				
				<li class ="">			
				    <a href= 'myavr.php<?php echo '?tbldevice_id='.$get_id; ?>')">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
				</li>
				
				</ul>
	 </div>
   </div>
</div>

<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
        <?php
         $my_device = mysqli_query($conn,"select * from tbllocation_details	                                                    
         LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id 
         LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
         where NOT EXISTS 
         (select * from tbllocation_details where dev_status='Dump')
         and tbldevice_id = '$get_id'		
         order by date_deployment DESC")or die(mysqli_error($conn));
         while($row = mysqli_fetch_array($my_device));
         $id = $row['tbldevice_id'];		                                               
         ?>
		   <a class="btn btn-info" id="print" data-placement="left" title="Click to Print" href="print_list_inventory.php<?php echo '?tbldevice_id='.$get_id; ?>" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>

<div class="block-content collapse in">
<div class="span12">
	<form action="" method="post"><!-----------------------------------table form------------------------------------>	
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		     <tr>			        
					<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Date Assign   </th>	
					<th>Device Status </th> 				
                    <th>Location Name </th>
					<th class="empty">Manage Device</th>
		    </tr>
		</thead>
<tbody>
<!-----------------------------------table Content------------------------------------>									
 <?php
$my_device = mysqli_query($conn,"select * from tbllocation_details	                                                    
LEFT JOIN tbldevice ON tbllocation_details.tbldevice_id = tbldevice.id 
LEFT JOIN tbldevice_name ON tbldevice.dev_id=tbldevice_name.dev_id
where NOT EXISTS 
(select * from tbllocation_details where dev_status='Dump')
and tbldevice_id = '$get_id'		
order by date_deployment DESC")or die(mysqli_error($conn));
while($row = mysqli_fetch_array($my_device)){
$id = $row['id'];		                                               
?>
<tr>
		<td><?php
			   $device_query2 = mysqli_query($conn,"select * from tbldevice ")or die(mysqli_error($conn));
		       $dev=mysqli_fetch_assoc($device_query2);
		       if($row['dev_status']=='New')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['date_deployment']; ?></td>
			<td><?php
			   $my_device1 = mysqli_query($conn,"select * from tbldevice ")or die(mysqli_error($conn));
		       $dev=mysqli_fetch_assoc($my_device1);
		       if($row['dev_status']=='New')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Used')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			    else if($row['dev_status']=='Repaired')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			<td><?php echo $location_row['stdev_location_name']; ?></td>
			
			<?php include('toolttip_edit_delete.php'); ?>
			<td width="185" class="empty"><a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" href="transfer.php<?php echo '?id='.$id; ?>&<?php echo 'tbldevice_id='.$get_id; ?>" class="btn btn-warning"><i class="icon-move"></i> Transfer </a>
			<a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="devl_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'tbldevice_id='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Status</a></td>		
		</tr>
											
	<?php } ?>   
</tbody>
</table>
</form>	
 <!---------------------------------------------------- /block --------------------------------------------->
             </div>
          </div>
        </div>
     </div>
  </div>
</div>
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>