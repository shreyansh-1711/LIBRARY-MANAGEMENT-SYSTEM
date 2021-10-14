<?php

	include "connect.php";
	$id=$_GET["bid"];
	$s="delete from book where bid='$id'";
	mysqli_query($con,$s);
	header("location:page_all_books.php");

?>