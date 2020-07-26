<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
	<style>
	body{
		font-family: Arial;
		background:#3498db;
	}
	.student{
		background:#fff;
        padding:40px;
        width:500px;
        margin:auto;
        margin-top: :50px;
        height: 300px;
	}
</style>
</head>
<body>

<div class="student">

<h3 align="right" style="margin-right: 2px; margin-top: 1px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome To Student Management System</h1>
<form method="post" action="index.php">
<table style="width:100%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center" >Student Information</td>
	</tr>
	<tr>
		<td align="left">Choose Standard</td><td>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
                <option value="8">8th</option>

		</td>
	</tr>
	<tr>
		<td align="left">Enter RollNo</td>
		<td><input type="text" name="rollno" required></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="show info">
		</td>
	</tr>
</table>
</div>
</body>
</html>	
<?php
if(isset($_POST['submit']))
{
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);
}


?>