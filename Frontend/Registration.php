<?php
include("layout.php");
include("connection_db.php");

if(isset($_POST['btn']))
{
	$fname = $_POST["fn"];
	$lname = $_POST["ln"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$cnic = $_POST["cnic"];
	$pwd = $_POST["pass"];
	
	$insert = "insert into registration (First_Name,Last_Name,Email_ID,Contact,ID_Proof,Password) values('$fname','$lname','$email','$phone','$cnic','$pwd')";
	$query = mysqli_query($connection,$insert);
	if($query)
	{
		echo '<script type="text/javascript"> alert("Your Registration is Successfull")</script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Your Registration is Unsuccessfull")</script>';
	}
}
?>
<!-- sign up Modal -->
<div class="container">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-3">
                    </div>
                        <div class="col-md-6">
                            <form action="Registration.php" method="post">
                                <div class="form-group">
                                    <label for="" class="col-form-label">First Name</label>
                                    <input type="text" class="form-control" name="fn" id="recipient-name1" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Last Name</label>
                                    <input type="text" class="form-control"  name="ln" id="recipient-email" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email"  required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Contact </label>
                                    <input type="number" class="form-control" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">CNIC</label>
                                    <input type="text" class="form-control" name="cnic"  required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="pass" id="password1" required>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" name="btn" value="Register">
                                </div>
                            </form>
                            <p class="text-center mt-3">Already a member?
                                <a href="Login.php">
                                    Login Now</a>
                            </p>
                        </div>
                        <div class="col-md-3">
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <br>