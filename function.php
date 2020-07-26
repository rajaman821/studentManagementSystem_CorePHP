<?php
  
  function showdetails($standard,$rollno)
  {
  	include('dbcon.php');
  	$sql="SELECT * FROM `student` WHERE rollno =$rollno AND standard=$standard";
  	
  	$run=mysqli_query($con,$sql);
  	if(mysqli_num_rows($run))  //if records found or not
  	{
            $data=mysqli_fetch_assoc($run);
            ?>
            <style>
            .details{
            	background:white;
            	width:588px;
            	align:center;
            	margin:auto;
            	margin-top:10px;
            	height:200px;
            }
        </style>
            <div class="details">


            <table border="1"  align="center">
            	<tr>
            		<th colspan="3" width=50%>Student Details</th>
            		
            	</tr>
            	<tr>
            		<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="max-width: 120px; max-height: 150px;"/></td>
            		<th>Roll No</th>
            		<td><?php echo $data['rollno'];?></td>
            	</tr>
            	<tr>
            		<th>Name</th>
            		<td><?php echo $data['name']; ?></td>
            	</tr>
            	<tr>
            		<th>Standard</th>
            		<td><?php echo $data['standard']; ?></td>
            	</tr>
            	<tr>
            		<th>Parents Contact No</th>
            		<td><?php echo $data['pcontacts']; ?></td>
            	</tr>
            	<tr>
            		<th>City</th>
            		<td><?php echo $data['city']; ?></td>
            	</tr>


</table>
</div>
<?php 
  	}
  	else
  	{
  		echo "<script>alert('No Student Record Found');</script>";

  	}

  }
  ?>