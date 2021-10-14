<?php
include "heading.php";
?>
<form method="get" action="page_deposit_books.php">
	Enter The Book Id
	<input type="text" name="t1">
	<input type="submit" name="btn" value="Search">
</form>
<?php

	include "connect.php";
	if(isset($_GET["btn"]))
	{
	$value=$_GET["t1"];
	$s="select * from book where bid='$value'";
	$rs=mysqli_query($con,$s);
	$c=mysqli_num_rows($rs);
	if($c!=0)		
	{
	echo "<table border=1 cellpadding=10>";
	
	while($r=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<tr><td colspan=2 align='center' ><img src=$r[5] width=100 height=100>";
		echo "<tr><td>BOOK ID<td>".$r[1];
		echo "<tr><td>BOOK NAME<td>".$r[2];
		echo "<tr><td>BOOK AUTHOR<td>".$r[3];
		echo "<tr><td>BOOK SUBJECT<td>".$r[4];
		echo "<tr><td>BOOK Status<td>".$r[6];
		echo "<tr><td colspan=2 align=center><a href='page_depo.php?bid=$r[1]'>Deposit</a>";
	}
	}
	else
		echo "<script>alert('book not exist')</script>";
	}
	
?>