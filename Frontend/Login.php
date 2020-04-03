<?php
include("layout.php");
include("connection_db.php");

$path = "";

if(isset($_GET["page"]))
{
	$path = $_GET["page"];
}

if(isset($_POST['btn']))
{
	$email = $_POST["email"];
	$pwd = $_POST["pass"];
	
	$select = "select * from registration where Email_ID='$email'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);

	if($row['Email_ID'] == $email && $row["Password"] == $pwd)
	{
		$_SESSION["fn"] = $row['First_Name'];
		$_SESSION["ln"] = $row['Last_Name'];
		$_SESSION["id"] = $row['User_ID'];
		$_SESSION["email"] = $row['Email_ID'];
		$_SESSION["conta"] = $row['Contact'];
		
		if($_POST["pagepath"] == "feedback.php")
		{
			echo '<script type="text/javascript">window.location.assign("feedback.php");</script>';
		}

		
		if($_POST["pagepath"] == "complain.php")
		{
			echo '<script type="text/javascript">window.location.assign("complain.php");</script>';
		}
		
		if($_POST["pagepath"] == "emergency_help.php")
		{
			echo '<script type="text/javascript">window.location.assign("emergency_help.php");</script>';
		}
		
		if($_POST["pagepath"] == "show_notification.php")
		{
			echo '<script type="text/javascript">window.location.assign("show_notification.php");</script>';
		}
		
		if($_POST["pagepath"] == "")
		{
			echo '<script type="text/javascript">window.location.assign("index.php");</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Invalid Email ID and Password") </script>';
	}
}
?>
<div class="container">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                </div>

                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                    <div class="col-md-3">
                    </div>
                        <div class="col-md-6">
                            <form action="Login.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email ID</label>
                                    <input type="email" class="form-control" name="email"  required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="pass" required>
                                </div>
                                <div class="right-w3l">
                                <input type="hidden" name="pagepath" value="<?php echo $path ?>" />
                                    <input type="submit" class="form-control" name="btn" value="Login">
                                </div>
                            </form>
                            <p class="text-center mt-3">
                                <a href="Registration.php">
                                    Register Now </a>
                            </p>
                        </div>
                        
                        <div class="col-md-3">
                    </div>
                    </div>
                </div>
                </div>
    </div>
    <br>