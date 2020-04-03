<div class="main-content">
<?php 
include("Layout.php");
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    
    <?php 
	include("connection_db.php");
	if(isset($_POST["btn"]))
	{
		$cate_name = $_POST["name"];
		
		$query = mysqli_query($connection,"insert into complain_category(C_Name) 
		values('".$cate_name."')");
		
		if($query)
		{
			$result = "Insert Category";	
			
		}
		else
		{
				$result = "Insert not Category";	
			
			
		}
		
		
		
	}
	
	
	?>                
                    
                    
                    	<div class="form-title">
							<h4>Add Camplain Category:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="form.php" method="post">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Camplain Category Name</label>
										<input type="text" class="form-control" id="inputName" name="name" value="" placeholder="Camplain Category Name" required>
									</div>
                                   
									<div class="form-group">
										<input type="submit" class="btn btn-info" name="btn" value="Insert"/>
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
