<?php
	include "heading.php";
	include "connect.php";
	
	session_start();
	$uid=$_SESSION["userid"];
	
	$s="select * from student where userid='$uid'";
	$rs=mysqli_query($con,$s);
	
	$r=mysqli_fetch_array($rs);
	
	echo "<table border=1 cellpadding=10>";
	echo "<tr>";
	echo "<tr><td colspan=2 align='center' ><img src=$r[7] width=100 height=100>";	
	echo "<tr><td>NAME<td>".$r[2];
	echo "<tr><td>ID<td>".$r[1];
	echo "<tr><td>GENDER<td>".$r[3];
	echo "<tr><td>DEGREE<td>".$r[4];
	echo "<tr><td>SEMESTER<td>".$r[5];
	echo "<tr><td>CONTACT NUMBER<td>".$r[5];
	echo "</table>";
?>
