<?php
include "heading.php";
include "connect.php";
	if(isset($_GET["btn"]))
		{	
		
			$rno=$_GET["t1"];
			$bid=$_GET["t2"];
			$doi=$_GET["t3"];
			$dos=$_GET["t4"];
			
			$s="select * from student where rno='$rno'";
			$rs=mysqli_query($con,$s);
			$c=mysqli_num_rows($rs);
			
				if($c==0)
					echo "<script>alert('Student Not Exist')</script>";
				else
				{
					$s="select bstatus from book where bid='$bid'";
					$rs=mysqli_query($con,$s);
					$c=mysqli_num_rows($rs);	
						if($c==0)
							echo "<script>alert('Book Not Exist')</script>";
						else
						{
							$r=mysqli_fetch_array($rs);
							$status=$r[0];
								if($status=='Issued')
									echo "<script>alert('Book Already Issued')</script>";
								else
								{
									$s="insert into issue(sid,bid,doi,dos) values ('$rno','$bid','$doi','$dos')";
									mysqli_query($con,$s);
									$s="update book set bstatus='Issued' where bid='$bid'";
									mysqli_query($con,$s);
									echo "<script>alert('Book Issued Successfully')</script>";
								}
						}
				}	
			
		}
?>
	<form method="get" action="page_new_issue_book.php">
	
		<table border=1 cellpadding=10>
			<tr>
				<td colspan=2 align=center><h2> ISSUE BOOK HERE </h2>
			<tr>	
				<td>Enter Student ID
				<td><input type="text" name="t1">	
			<tr>	
				<td>Enter Book ID
				<td><input type="text" name="t2">
			<tr>	
				<td>Enter Date Of Issue
				<td><input type="date" name="t3">
			<tr>	
				<td>Enter Date Of Submit
				<td><input type="date" name="t4">
			<tr>	
				<td colspan=2 align="center" ><input type="submit" value="ISSUE" name="btn">
		</table>
	</form>