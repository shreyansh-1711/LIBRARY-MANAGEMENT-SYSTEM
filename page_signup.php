<?php
	include "connect.php";
	if(isset($_POST["btn"]))
	{
		$a=$_POST["t1"];
		$b=$_POST["t2"];
		$c=$_POST["t3"];
		$d=$_POST["t4"];
		
		$source=$_FILES["fp"]["tmp_name"];
		$dest=$_FILES["fp"]["name"];
		
		if(move_uploaded_file($source,$dest))
		{
			$s="insert into signup values('$a','$b','$c','$dest','$d')";
			mysqli_query($con,$s);
			
			echo "<script>alert('Sign Up Complete')</script>";
		}
		else
			echo "<script>alert('found error in signup')</script>";
		
			header("location:page_login.php");
	}
?>

<html>
	<head>
		<title>SignUp page</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
			
			<center>
			<form method="post" enctype="multipart/form-data" action="page_signup.php">
			<table border=1 cellpadding=10>
				<tr>
					<td colspan=2 align=center>SIGNUP HERE!!
				<tr>
					<td>Enter User ID
					<td><input type="text" name="t1">
				<tr>
					<td>Enter User Name
					<td><input type="text" name="t2">	
				<tr>
					<td>Enter User Contact Number
					<td><input type="text" name="t3">
				<tr>
					<td>Enter User Pic
					<td><input type="file" name="fp">
				<tr>
					<td>Enter Password
					<td><input type="text" name="t4">		
				<tr>
					<td colspan=2 align="center"><input type="submit" value="signup" name="btn">	
			</table>
			</form>
			</center>
	</body>	
</html>		