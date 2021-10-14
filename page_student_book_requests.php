<?php	
	include "connect.php";
	include "heading.php";
	
	$s="select * from request";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<tr><td>Student ID<td>Book Name<td>Book Author<td>Book Subject<td>Book Status";
	while($r=mysqli_fetch_array($rs))
	{	
	echo "<tr>";
	echo "<td>".$r[4];
	echo "<td>".$r[1];
	echo "<td>".$r[2];	
	echo "<td>".$r[3];	
	echo "<td>".$r[5];	
	echo "<td><a href='page_approved.php?bauthor=$r[2]'><img src='tick.jpg' width=20 height=20></a>";
	echo "    <a href='page_denied.php?bauthor=$r[2]'><img src='cross.jpg' width=20 height=20'></a>";
	
	}
?>