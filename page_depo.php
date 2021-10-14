<?php
	include "connect.php";
	$bid=$_GET["bid"];
	$s="update book set bstatus='Not Issued' where bid='$bid'";
	mysqli_query($con,$s);
	header("location:page_deposit_books.php");
?>