<?php

	include "connect.php";
	$id=$_GET["rno"];
	$s="delete from student where rno='$id'";
	mysqli_query($con,$s);
	header("location:page_all_student.php");

?>