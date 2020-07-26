<?php

session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');

}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
   <style>
    body{
        font-family:Arial;
        background:#3498db;
    }
    .login{
        background:#fff;
        padding:40px;
        width:240px;
        margin:auto;
        margin-top: :50px;
        height: 300px;
    }
    form{
        width:240px;
        text-align: center;

    }
    input{
        width:180px;
        text-align: center;
        background:#ecf0f1;
        border:2px solid transparent;
        border-radius: 3px;
        font-size:12px;
        font-weight:200;
        padding:10px 0;
        transition:border .5s;
    }
    input[type=submit]{
        border: 2px solid transparent;
        background:#3498db;
        color:white;
        font-size:12px;
        line-height:25px;
        padding:10px 0;
        border-radius:3px;
        margin-top:50px;

    }
    input[type=submit]:hover{
        background:#2980b9;


    }
    h1{
        color:gray;
    }

</style> 
</head>
<body>
    <div class="login">
	<h1 align="center">Admin Login</h1>
    
	<form action="login.php" method="post">
		<table align="center">
			<tr>
				<td>Username</td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
    </div>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login'])) //submit button login
{
    $username=$_POST['uname'];  // storing username into variable and name type is 'uname'
    $password=$_POST['pass'];
    $qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $run=mysqli_query($con,$qry); //mysqliquery default function passing database varibale and query variable
    $row=mysqli_num_rows($run); //return the number of rows is everythin matches
    if($row<1)
    {
    	?>
    	<script>
    	alert('Username or password not match');
    	window.open('login.php','_self'); //refreshing page itself
    	</script>
    	<?php

    }
    else
    {
    	$data=mysqli_fetch_assoc($run);
    	$id=$data['id'];
    
    	$_SESSION['uid']=$id;
    	header('location:admin/admindash.php');
    }


}

?>

