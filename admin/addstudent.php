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

 ?>
 <form method="post" action="addstudent.php" enctype="multipart/form-data">
 	<div class="dashboard">
 	<table border="1" style="width:60%;" align="center">
 	
 		<tr>
 			<td>ROLL NO</td><td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
 			
 		</tr>
 		<tr>
 			<td>Full Name</td><td><input type="text" name="name" placeholder="Enter Full name" required></td>
 		</tr>
 		<tr>
 			<td>City</td><td><input type="text" name="city" placeholder="Enter City" required></td>
 		</tr>
 		<tr>
 			<td>Parents contact no</td><td><input type="text" name="pcon" placeholder="Enter contacts" required></td>
 		</tr>
 		<tr>

 			<td>standard </td><td><input type="number" name="std" placeholder="Enter Standard" required></td>

   
 		</tr>
 		<tr>
 			<td>image</td><td><input type="file" name="simg"  required></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
 		</tr>

 	</table>
 </div>
 </form>
</body>
</html>
<?php
   
   if(isset($_POST['submit']))
{
      include('../dbcon.php');
      $rolno=$_POST['rollno'];
      $name=$_POST['name'];
      $city=$_POST['city'];
      $pcon=$_POST['pcon'];
      $std=$_POST['std'];
      $imagename=$_FILES['simg']['name']; //name for storing name
     // $tempname=$_FILES['simg']['tmp_name']; //temporary file on server
      move_uploaded_file($imagename,"../dataimg/$imagename"); //identify on server through temporary name so 'tempname' */
      $qry="INSERT INTO student (rollno, name, city, pcontacts,standard,image) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
      $run= mysqli_query($con,$qry);
      if($run==true)
      {
      	?>
      	<script>
      		alert('data inserted successfully');
      	</script>
      	<?php
      }else{
      	echo("Error: ".mysqli_error($con));
      }
}
?>