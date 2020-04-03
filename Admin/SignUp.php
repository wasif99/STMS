<div class="main-content">
<?php 

include("Layout.php");
include("connection_db.php");

if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$cpwd = $_POST["cpass"];
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "Style/images/";
//=========================================================Insert work
if(!empty($_FILES["fileupload"]["name"]))
{
	if(move_uploaded_file($tmp_name,$location.$file))
	{
		$insert = "insert into admin (User_Name,Password,Conform_Password,Image) values('".$un."','".$pwd."','".$cpwd."','".$file."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			echo '<script type="text/javascript"> alert("Account Create Successfull")</script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Account Create Unsuccessfull")</script>';
		}
	}
}
}
if(!isset($_GET["e_id"]))
{
	$bt = "Insert";
	$color = "btn btn-Success disabled";
	$imgvisible = "hidden";
}


?>

<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
			<h2 class="title1">Registration</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
							<h4>New Registration:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="SignUp.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter User Name</label>
										<input type="text" class="form-control" id="inputName" placeholder="User Name" value="<?php echo @$name ?>" required name="name">
									</div>
                                    
									<div class="form-group">
                                      <label for="exampleInputEmail1">Enter Password</label>
									  <input type="text" data-toggle="validator" data-minlength="6" value="<?php echo @$pass ?>" class="form-control" id="inputPassword" placeholder="Password" required name="pass">
									  <span class="help-block">Minimum of 6 characters</span>
									</div>
                                    
									<div class="form-group">
                                      <label for="exampleInputEmail1">Enter conform Password</label>
									  <input type="text" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm password" value="<?php echo @$cpass ?>" required name="cpass">
                                      
									  <div class="help-block with-errors"></div>
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Upload Image</label>
										<input type="file" class="form-control"  name="fileupload" onChange="readURL(this)">
									</div>
                                    
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
												I have read and accept terms of use.
											</label>
											<div class="help-block with-errors"></div>
										</div>
									</div>
                                    
									<div class="form-group">
										<input type="submit" class="<?php echo @$color?>" name="btn" value="<?php echo @$bt?>"/>
									</div>
                                    <div class="form-group">
										<input type="hidden" name="hid" required="required" value="<?php echo @$eid?>"/>
                                        <input type="hidden" name="path" value="<?php echo @$img?>"/>
									</div>
								</form>
                                	</div>
                                <div class="col-md-4">
                                    <img src="Style/images/<?php echo @$img?>" id="proimg" class="img-thumbnail" width="250" height="250" style="visibility:<?php echo $imgvisible?>">
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
		   <p style="color:#090"><?php if(isset($_POST["btn"])) echo $result?></p>
	   </div>
<script src="Style/js/validator.min.js"></script>

<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
					.css( "visibility", "visible" );
					
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>    