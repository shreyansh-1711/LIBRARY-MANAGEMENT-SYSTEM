<?php
	include "heading.php";
	include "connect.php";
	
	if(isset($_GET["btn"]))
	{
		session_start();
		$uid=$_SESSION["userid"];
		$s="select rno from student where userid='$uid'";
		$rs=mysqli_query($con,$s);
		$r=mysqli_fetch_array($rs);
		$sid=$r[0];
		
		$bname=$_GET["t1"];
		$bauthor=$_GET["t2"];
		$bsubject=$_GET["t3"];
		
		$s="insert into request(bname,bauthor,bsubject,sid,bstatus) values ('$bname','$bauthor','$bsubject','$sid','Pending')";
		$rs=mysqli_query($con,$s);
	
	}

?>



<form method="get" action="page_new_request.php">
	<table border=1 cellpadding=10>
		<tr>
			<td colspan=2 align="center">REQUEST FOR NEW BOOK
		<tr>
			<td>Enter Book Name
			<td><input type="text" name="t1">
		<tr>
			<td>Enter Book Author
			<td><input type="text" name="t2">
		<tr>
			<td>Book Subject
			<td><select name="t3">
				<option>English
				<option>Mathematics
				<option>Hindi
				<option>Science
				<option>Computer
				<option>Manga
				</select>
		<tr>
			<td colspan=2 align="center">
			<input type="submit" name="btn" value="request">
			
	</table>

</form>  
