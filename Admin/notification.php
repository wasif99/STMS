<div class="main-content">
<?php 
include("Layout.php");
include("connection_db.php");
if(isset($_POST["btn"]))
{
		$loca = $_POST["location"];
		$date = $_POST["date"];
		$time = $_POST["time"];
		$discrip = $_POST["dis"];
		
		$query = mysqli_query($connection,"insert into notification(Date,Time,Location,Description,notify) 
		values('$date','$time','$loca','$discrip','1')");	
	if($query)
	{
		$result = "Notification Post Successfull";	
	}
	else
	{
		$result = "Notification Post Unsuccessfull";		
	}			
}		

?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">                 
                    	<div class="form-title">
							<h4>Add Notification:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="notification.php" method="post">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Location</label>
										<input type="text" class="form-control" id="inputName" name="location" placeholder="Add Location" required>
									</div>
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Date</label>
										<input type="date" class="form-control" id="inputName" name="date" placeholder="Add Date" required>
									</div>
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Time</label>
										<input type="time" class="form-control" id="inputName" name="time" placeholder="Add Time" required>
									</div>
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Discription</label>
                                        <textarea class="form-control" name="dis"></textarea>
									</div>
                                   
									<div class="form-group">
										<input type="submit" class="btn btn-info" name="btn" value="Sent"/>
									</div>
                                    <label><?php if(isset($_POST["btn"])) echo $result ?></label>
								</form>
                                	</div>
                                    
                                    
                           	    </div>
							</div>
						</div>
				</div>
		</div>
	</div>
</div>
</div>
<div class="footer">
		   <p style="color:#090"></p>
	   </div>
