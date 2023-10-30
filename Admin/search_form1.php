
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Advance Search Form</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search1.php">
	           
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Device Name</label>
			  <div class="controls">
			  <select name="dev_name" class="" required/>
			  <option>&larr; Select Device Name &rarr;</option>
			  <?php
				$device_query ="select * from tbldevice_name";
				$result= mysqli_query($conn,$device_query);
				while($device_row = mysqli_fetch_array($result)){			
				?>
			  <option><?php echo $device_row['dev_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  			  			
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Device Serial Number</label>
			  <div class="controls">
			  <select name="dev_serial"  class="" required/>
			  <option>&larr; Select Device Serial &rarr;</option>
			  <?php
				$serial_query = "select * from tbldevice";
				$result= mysqli_query($conn,$serial_query);
				while($row = mysqli_fetch_array($result)){			
				?>
			  <option><?php echo $row['dev_serial']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  
			   							
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search1" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Search</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search1').tooltip('show');
		        $('#search1').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
</div>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
</div>
</div>