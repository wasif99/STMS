<?php
include("layout.php");
include("connection_db.php");

	$hlocation = "";
if(isset($_POST['btn']))
{
	$id = $_SESSION['id'];
	$discrip = $_POST["dis"];
	$date = date("Y/m/y");
		
	$insert = "insert into feedback (User_ID,Description,Date) values('$id','$discrip','$date')";
	$query = mysqli_query($connection,$insert);
	if($query)
	{
		echo '<script type="text/javascript"> alert("Your Feedback Sent Successfull")</script>';
	}
	else
	{
		echo mysqli_error($connection);
	}
}
?>
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>F</span>eedback</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-12 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="container">
                    <div class="contact-top1">
                        <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                        <form action="feedback.php" method="post" class="f-color">
                            <div class="form-group">
                                <label for="contactusername">Description</label>
                                <textarea class="form-control" rows="5" id="contactcomment" name="dis" required></textarea>
                            </div>
                            
                            <button type="submit" name="btn" class="btn btn-info btn-block">Submit</button>
                        </form>
                    </div>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                
            </div>
            <!-- //contact details container -->
        </div>
    </section>