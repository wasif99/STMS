<div class="main-content">
<?php 
include("Layout.php");
include("connection_db.php");

if(isset($_POST["btn"]))
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	$cstatus = $_POST["status"];

	if(!empty($_POST['b']))
	{
		$bid = $_POST['b'];
		$update = "update compaints set User_ID='$a',Title='$c',Description='$d',Date='$e',Status='$cstatus',Com_Category_Id='$f' where Complain_ID='$bid'";	
	$query = mysqli_query($connection,$update);

		if($query)
		{
			echo '<script type="text/javascript"> alert("Your Complaint Status Sent Successfull")</script>';
		}
		else
		{
			echo mysqli_error($connection);		
		}
		
	}
			
}

if(isset($_GET['e_id']))
{
	$id = $_GET['e_id'];
	$select = "select * from compaints where Complain_ID='$id'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	
	$uid = $row["User_ID"];
	$ti = $row["Title"];
	$des = $row["Description"];
	$date = $row["Date"];
	$sta = $row["Status"];
	$cat = $row["Com_Category_Id"];
}
	
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Sent Camplain Status:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="complaint_status.php" method="post">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Camplain Status</label>
										<input type="text" class="form-control" id="inputName" name="status" placeholder="Camplain Status" value="<?php echo @$sta ?>" required>
									</div>
                                   
									<div class="form-group">
										<input type="submit" class="btn btn-info" name="btn" value="Sent"/>
									</div>
                                    <input type="hidden" name="a" value="<?php echo @$uid ?>">
                                    <input type="hidden" name="b" value="<?php echo @$id ?>">
                                    <input type="hidden" name="c" value="<?php echo @$ti ?>">
                                    <input type="hidden" name="d" value="<?php echo @$des ?>">
                                    <input type="hidden" name="e" value="<?php echo @$date ?>">
                                    <input type="hidden" name="f" value="<?php echo @$cat ?>">

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
