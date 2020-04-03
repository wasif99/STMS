<div class="main-content">
<?php
include("Layout.php");
include("connection_db.php");

$select = "select * from admin ";
$query = mysqli_query($connection,$select);
$acount = mysqli_num_rows($query);

$select = "select * from registration ";
$query = mysqli_query($connection,$select);
$ucount = mysqli_num_rows($query);

$select = "select * from compaints ";
$query = mysqli_query($connection,$select);
$ccount = mysqli_num_rows($query);

$select = "select * from emergency_help ";
$query = mysqli_query($connection,$select);
$ecount = mysqli_num_rows($query);

$select = "select * from feedback ";
$query = mysqli_query($connection,$select);
$fcount = mysqli_num_rows($query);
?>    
	<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $acount ?></strong></h5>
                      <span>Total Workers</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ucount ?></strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-phone-square icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ccount ?></strong></h5>
                      <span>Total Complaints</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-plus dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ecount ?></strong></h5>
                      <span>Total Emergencies</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-book dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $fcount ?></strong></h5>
                      <span>Total Feedback</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Weekly Sales</h3>
                    </div>
					
						<div id="Linegraph" style="width: 98%; height: 350px">
						</div>
						
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
				
		<div class="col_1">
			<div class="col-md-12 span_8">
				<div class="activity_box">
					<h2>Messages</h2>
					<div class="scrollbar" id="style-1">
                    <div class="activity-row">
                    <?php 
					 $select = "select * from view_feedback";
					 $query = mysqli_query($connection,$select);
					 $count = mysqli_num_rows($query);
					 if($count > 0)
					 {
						while($row = mysqli_fetch_array($query))
					 {
					?> 
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#"><?php echo $row["First_Name"]."&nbsp;".$row["Last_Name"]?></a></h5>
								<p><?php echo $row["Description"]?></p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6><?php echo date('m/d/y',time())?></h6></div>
					  
                       <?php }}?>
                        </div>
				</div>
			</div>
			
			
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
		</div>
</div>