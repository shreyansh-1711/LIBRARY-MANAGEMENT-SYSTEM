<?php	
	include "connect.php";
	include "heading.php";
	
	$s="select * from student";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<tr><td>Student Rno<td>Student Name<td>Conatact Number<td>Student PIC";
	while($r=mysqli_fetch_array($rs))
	{	
	echo "<tr>";	
	echo "<td>".$r[1];
	echo "<td>".$r[2];
	//echo "<td>".$r[3];
	//echo "<td>".$r[4];
	//echo "<td>".$r[5];
	echo "<td>".$r[6];
	echo "<td><img src=$r[7] width=100  height=100>";
	echo "<td><a href='page_delete1.php?rno=$r[1]'><img src='delete.png' width=20 height=20></a>";
	echo "    <a href='page_show1.php?rno=$r[1]'><img src='show.png' width=20 height=20></a>";
	}
?>