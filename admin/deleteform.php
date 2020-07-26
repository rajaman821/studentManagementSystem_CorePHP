<?php


 include('../dbcon.php');
      $id=$_REQUEST['sid'];
    
      $qry="DELETE FROM `student` WHERE id='$id';";
      $run= mysqli_query($con,$qry);
      if($run==true)
      {
      	
      	echo"<script>alert('data deleted Successfully');
		window.open('deletestudent.php','_self');
          
		</script>";
         	
      		
      	
      	
      } 
      else{ 

      	echo("Error: ".mysqli_error($con));
      } 


?>