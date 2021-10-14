<?php
include "connect.php";
$bauthor=$_GET["bauthor"];
$s="update request set bstatus='Approved' where bauthor='$bauthor'";
mysqli_query($con,$s);
header("location:page_student_book_requests.php");
?>