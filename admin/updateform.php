<?php
session_start();
 
 if(isset($_SESSION['uid']))
 {
 	echo "";

 }
 else
 {
 	header('location: ../login.php');
 	

 }
 ?>
 <?php

  include('header.php');
  include('titlehead.php');
  include('../dbcon.php');
  $sid=$_GET['sid'];                
  $sql="SELECT * FROM student WHERE id=$sid";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);

 ?>
  <form method="post" action="updatedata.php" enctype="multipart/form-data">
 	<div class="dashboard">
 	<table border="1" style="width:60%;" align="center">
 	
 		<tr>
 			<td>ROLL NO</td><td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
 			
 		</tr>
 		<tr>
 			<td>Full Name</td><td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
 		</tr>
 		<tr>
 			<td>City</td><td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
 		</tr>
 		<tr>
 			<td>Parents contact no</td><td><input type="text" name="pcon" value=<?php echo $data['pcontacts']; ?> required></td>
 		</tr>
 		<tr>

 			<td>standard </td><td><input type="number" name="std" value=<?php echo $data['standard']; ?> required></td>
 		</tr>
 		<tr>
 			<td>image</td><td><input type="file" name="simg"  required></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center">
 				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />

 				<input type="submit" name="submit" value="Submit">
 			</td>
 		</tr>

 	</table>
 </div>
 </form>
</body>
</html>