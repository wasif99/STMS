<div class="main-content">
<?php
include("Layout.php");
include("connection_db.php");

$select = "select * from view_emergency";
$query = mysqli_query($connection,$select);

?>
	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Emergency Help List:</h4>
                        <button onclick="printData()" class="btn btn-primary"><span class="fa fa-plus"></span> Create Report</button>
                        <div style="overflow-x:auto;" id="printTable">
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Help ID</th> 
                                    <th>Location</th>
                                    <th>User Name</th> 
                                    <th>Email_ID</th> 
                                    <th>Contact</th> 
                        		</tr> 
                           </thead> 
                           
                           <tbody> 
                           <?php
								foreach($query as $value){					   
						   ?>
                           
                           	<tr> 
                        		<th scope="row"><?php echo $value["Help_ID"] ?></th> 
                                <td><?php echo $value["Location"] ?></td>
                                <td><?php echo $value["First_Name"]."&nbsp;".$value["Last_Name"] ?></td>
                                <td><?php echo $value["Email_ID"] ?></td> 
                                <td><?php echo $value["Contact"] ?></td> 

                                     
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
mywindow.document.write('<h1>' + "Emergency Helps Report" + "<hr>" + '</h1>');
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