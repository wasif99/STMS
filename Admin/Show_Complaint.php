<div class="main-content">
<?php
include("Layout.php");
include("connection_db.php");

//report work
$select = "select * from view_complaint";
$query = mysqli_query($connection,$select);


?>
	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Complaint List:</h4>
                        <button onclick="printData()" class="btn btn-primary"><span class="fa fa-plus"></span> Create Report</button>

                        <div style="overflow-x:auto;" id="printTable">
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Complain ID</th> 
                                    <th>User Name</th> 
                                    <th>Title</th> 
                                    <th>Complaint Category</th>
                                    <th>Description</th> 
                                    <th>Date</th> 
                                    <th>Status</th> 
                        		</tr> 
                           </thead> 
                           
                           <tbody> 
                           <?php
									foreach($query as $value){					   
						   ?>                           
                           	<tr> 
                        		<th scope="row"><?php echo $value["Complain_ID"] ?></th> 
                                <td><?php echo $value["First_Name"] ?></td>
                                <td><?php echo $value["Title"] ?></td> 
                                <td><?php echo $value["C_Name"] ?></td>
                                <td><?php echo $value["Description"] ?></td> 
                                <td><?php echo $value["Date"] ?></td> 
                                <td><?php echo $value["Status"] ?></td>
                                <td><a href="complaint_status.php?e_id=<?php echo $value["Complain_ID"] ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a></td>
                        	</tr>
                           <?php
								} 	
						   ?>
                        		 
                           </tbody> 
                        </table>
					</div>
			</div>
		</div>
	</div>

</div>



</div>
<script>// Print
function printData(){
var mywindow = window.open('', 'PRINT', 'height=1000,width=1000');
mywindow.document.write('<html><head><title>' + document.title  + '</title>');
mywindow.document.write("</head><body style='font-family:arial;'>");
mywindow.document.write("<img src='{{url('/')}}/public/images/logo.png' />" + "<br>");
mywindow.document.write("<div class='row'>");
mywindow.document.write("</div>");
mywindow.document.write('<h1>' + "Complaints Report" + "<hr>" + '</h1>');
mywindow.document.write("<table width='100%' border='1'>" +  document.getElementById("printTable").innerHTML + "</table>" + "<br>" + "<br>" + "<br>");

mywindow.document.write("<label style='float:right;'>" + "Officer Signature: _____________________" + "</label>");
mywindow.document.write("</div>");
mywindow.document.write('</body></html>');
mywindow.document.close();
mywindow.focus();
mywindow.print();
mywindow.close();
}
</script>

