<center>
<?php
	include "connect.php";
	include "heading.php";	
	$id=$_GET["rno"];
	$s="select * from student where rno=$id";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<table border=1 cellpadding=10>";
	while($r=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<tr><td colspan=2 align='center' ><img src=$r[7] width=100 height=100>";
		echo "<tr><td>Student RNO<td>".$r[1];
		echo "<tr><td>Student Name<td>".$r[2];
		echo "<tr><td>Student Gender<td>".$r[3];
		echo "<tr><td>Student Degree<td>".$r[4];
		echo "<tr><td>Student Semester<td>".$r[5];
		echo "<tr><td>Contact Number<td>".$r[6];
		echo "</table>";
		echo "<a href='page_all_student.php'>BACK</a>";
	}
?>