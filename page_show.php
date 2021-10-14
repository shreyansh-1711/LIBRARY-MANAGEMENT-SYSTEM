<center>
<?php
	include "connect.php";
	include "heading.php";	
	$id=$_GET["bid"];
	$s="select * from book where bid=$id";
	$rs=mysqli_query($con,$s);
	echo "<table border=1 cellpadding=10>";
	echo "<table border=1 cellpadding=10>";
	while($r=mysqli_fetch_array($rs))
	{		
	echo "<tr>";
    echo "<tr><td colspan=2 align=center ><img src=$r[5] width=100  height=100>";	
	echo "<tr><td>Book ID<td>".$r[1];
	echo "<tr><td>Book Name<td>".$r[2];
	echo "<tr><td>Book Author<td>".$r[3];
	echo "<tr><td>Book Subject<td>".$r[4];
	echo "<tr><td>Book Status<td>".$r[6];
	echo "</table> <br>";
	echo "<a href='page_all_books.php'>BACK</a>";
	}
?>