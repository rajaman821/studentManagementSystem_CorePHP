<?php


 include('../dbcon.php');
      $rolno=$_POST['rollno'];
      $name=$_POST['name']; 
      $city=$_POST['city'];
      $pcon=$_POST['pcon'];

      $std=$_POST['std'];
      $id=$_POST['sid']; // sid hidden receive here
      $imagename=$_FILES['simg']['name']; //name for storing name
     // $tempname=$_FILES['simg']['tmp_name']; //temporary file on server
      move_uploaded_file($imagename,"../dataimg/$imagename"); //identify on server through temporary name so 'tempname' */
      $qry="UPDATE student SET rollno = '$rolno' , name = '$name', city = '$city', pcontacts = '$pcon', standard = '$std' ,image= '$imagename' WHERE id ='$id'";
      $run= mysqli_query($con,$qry);
      if($run==true)
      {
      	
      	echo"<script>alert('Profile updated Successfully');
		window.open('updateform.php?sid=<?php echo $id;?>','_self');
          
		</script>";
         	
      		
      	
      	
      } 
      else{ 

      	echo("Error: ".mysqli_error($con));
      } 


?>