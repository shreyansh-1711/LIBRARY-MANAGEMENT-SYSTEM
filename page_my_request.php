<?php	
	include "connect.php";
	include "heading.php";
		
		session_start();
		$uid=$_SESSION["userid"];
		$s="select rno from student where userid='$uid'";
		$rs=mysqli_query($con,$s);
		$r=mysqli_fetch_array($rs);
		$sid=$r[0];
		
		$s="select * from request where sid='$sid'";
		$rs=mysqli_query($con,$s);
		echo "<table border=1 cellpadding=10>";
		echo "<tr><td>Student ID<td>Book Name<td>Book Author<td>Book Subject<td>Request Status";
		while($r=mysqli_fetch_array($rs))
		{	
		echo "<tr>";
		echo "<td>".$r[4];
		echo "<td>".$r[1];
		echo "<td>".$r[2];	
		echo "<td>".$r[3];	
		echo "<td>".$r[5];	
		}
?>