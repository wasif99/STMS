<?php
include("layout.php");
include("connection_db.php");

if(isset($_POST['btn']))
{
	$id = $_SESSION["id"];
	$ctitle = $_POST["title"];
	$dis = $_POST["discrip"];
	$date = date("Y/m/d",time());
	$status = "Unread Complaint";
	$category = $_POST["ccata"];
		
	$insert = "insert into compaints (User_ID,Title,Description	,Date,Status,Com_Category_Id) values('$id','$ctitle','$dis','$date','$status','$category')";
	$query = mysqli_query($connection,$insert);
	if($query)
	{
		$select = "select * from compaints where User_ID = '".$id ."'";
		$query = mysqli_query($connection,$select);
		$row = mysqli_fetch_array($query);
		$cid =$row["Complain_ID"];
		
		echo '<script type="text/javascript"> alert("Your Complaint Sent Successfull.........    Your Complaint Id is '.$cid.'")</script>';
	}
	else
	{
		echo mysqli_error($connection);
	}
}
if(isset($_POST['sbtn']))
{
	$id = $_POST['cid'];
	$select = "select * from view_complaint where Complain_ID = '$id'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$name = $row["First_Name"];
	$id = $row["Complain_ID"];
	$t = $row["Title"];
	$dis = $row["Description"];
	$d = $row["Date"];
	$s = $row["Status"];
	
			echo '<script type="text/javascript"> alert("User Name:    '.$name.'\nComplaint Id:    '.$id.'\nComplaint Title:    '.$t.'\nComplaint Description:    '.$dis.'\nComplaint Date:    '.$d.'\nComplaint Status:    '.$s.'")</script>';

	
}
?>
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>C</span>omplaint</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-12 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="container">
                    <form method="post" action="complain.php">
                    	<div class="form-group">
                        <h3>Check Your Complaint Status</h3><br />
                                <h5>Complaint Id</h5><br />
                                <input type="number" name="cid" class="form-control" required><br />
                                <input type="submit" name="sbtn" value="Search" class="btn btn-info" />
                            </div>
                    </form>
                    <div class="contact-top1">
                        <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                        <form action="complain.php" method="post" >
                            <div class="form-group">
                                <label for="contactusername">Title</label>
                                <input type="text" name="title" class="form-control" id="contactusername" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="contactemail">Complaint Category</label>
                                <select class="form-control" name="ccata">
                                <option>Select Complaint Category</option>
                                
                                <?php 
									
									$select = "select * from complain_category";
									$query = mysqli_query($connection,$select);
									$count = mysqli_num_rows($query);
									if($count > 0)
									{
										while($row = mysqli_fetch_array($query))
										{
											echo "<option value=".$row["C_ID"].">".$row["C_Name"]."</option>";
										}
									}								
								?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Discription</label>
                                <textarea class="form-control" name="discrip" rows="5" id="contactcomment" name="msg" required></textarea>
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