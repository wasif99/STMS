<meta http-equiv="refresh" content="30">
<?php
include("layout.php");
include("connection_db.php");

if(isset($_GET["notf"]))
{
	
	$n_id = $_GET["notf"];
	
	$connection->query("update notification set notify='0' where Notification_ID='$n_id'");
	header("Location:Notification.php");
	
}
$data = $connection->query("select * from notification order by Notification_ID desc");
$new_data = $connection->query("select * from notification where notify='1'");
$count =  mysqli_num_rows($new_data);
?>
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>N</span>otification</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-12 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="container">
                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="background:crimson ">
                    	
                        <?php 
          foreach($data as $value)
          { 
            if($value['notify'] == '1')	
            {
                $id = $value['Notification_ID'];
            ?>
            <div class="row" style="background-color:#f5f5f5">
            	<div class="col-md-10" style="border-bottom:solid #000;border-left:solid #000;border-top:solid #000; font-size:20px">
            <a href="?notf=<?php echo $value['Notification_ID']; ?>" title="Please Click">
            
				<?php echo "Location: <h4>".$value['Location'] ."</h4>"?><br />
                <?php echo "Date & Time:<h4> ".$value['Date'].'&nbsp;','&nbsp;'.$value['Time']."</h4>"?><br />
                <?php echo "Problem: <h4>".$value['Description']."</h4>"?>
            </a>
            	</div>
                <div class="col-md-2" style="border-bottom:solid #000;border-right:solid #000;border-top:solid #000; color:red; font-size:20px">
                <?php echo "New" ?> &nbsp;
                <?php echo date("d/m/Y") ?>
                </div>

            </div>
            <?php 
            }
            else
            {
            ?>
        	<div class="row" style="background:#f5f5f5">
            	<div class="col-md-10" style="border-bottom:solid; font-size:20px">
                
				<?php echo "Location: <h4>".$value['Location'] ."</h4>"?><br />
                <?php echo "Date & Time:<h4> ".$value['Date'].'&nbsp;','&nbsp;'.$value['Time']."</h4>"?><br />
                <?php echo "Problem: <h4>".$value['Description']."</h4>"?>
            	</div>
                <div class="col-md-2" style="border-bottom:solid; font-size:20px">
                <?php echo date("d/m/Y") ?>
                </div>
            </div>            
            <?php 
             }
             }
            ?>
		
                    
                    </div>
                    <div class="col-md-2"></div>
                    
                    </div>
                    	
					</div>
			
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                
            </div>
            <!-- //contact details container -->
        </div>
    </section>