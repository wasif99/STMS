<?php
include("layout.php");
include("connection_db.php");

	$hlocation = "";
if(isset($_POST['btn']))
{
	$id = $_SESSION['id'];
	$hlocation = $_POST["location"];
		
	$insert = "insert into emergency_help (User_ID,Location) values('$id','$hlocation')";
	$query = mysqli_query($connection,$insert);
	if($query)
	{
		echo '<script type="text/javascript"> alert("Your Emergency Help Sent Successfull")</script>';
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
                <span>Emergency</span> Help</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-12 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="container">
                    <div class="contact-top1">
                        <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                        <form action="emergency_help.php" method="post" class="f-color">
                            <div class="form-group">
                                <label for="contactusername">Location</label>
                                <input type="text" class="form-control" name="location" id="recipient-name1" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="contactcomment">User Name</label>
                                <input type="text" value="<?php echo $_SESSION["fn"]."&nbsp;".$_SESSION["ln"] ?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="contactusername">User Email</label>
                                <input type="text" value="<?php echo $_SESSION["email"]; ?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="contactusername">Contact No</label>
                                <input type="text" value="<?php echo $_SESSION["conta"]; ?>" class="form-control" disabled>
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
        <!-- contact map grid -->
        <div class="map contact-right pb-5">
            <div class="pt-lg-5 bg-pricemain text-center">
                <h3 class="stat-title text-capitalize pb-5">get directions</h3>
                <span class="w3-line"></span>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                allowfullscreen></iframe>
        </div>
        <!--//contact map grid ends here-->
    </section>