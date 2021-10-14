<?php 
include "heading.php";
include "connect.php";

$s="select max(bid) from book";
$rs=mysqli_query($con,$s);
$r=mysqli_fetch_array($rs);
$cnt=mysqli_num_rows($rs);

if($cnt==0)
	$id="1001";
else
	$id=$r[0]+1;
	

if(isset($_POST['btn']))
{	
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	$c=$_POST["t3"];
	$d=$_POST["t4"];
	
	$source=$_FILES["fp"]["tmp_name"];
	$dest="./images/".$_FILES["fp"]["name"];
	
	if(move_uploaded_file($source,$dest))
	{
		$s="insert into book(bid,bname,bauthor,bsubject,bpic,bstatus) values('$id','$b','$c','$d','$dest','Not Issued')";
		mysqli_query($con,$s);
		echo "<script>alert('Book Has Registered Successfully')</script>";
	}
	else
		echo "<script>alert('Found Error in Registration')</script>";
	
	header("location:page_new_book.php");
}
	
?>


<br>
	<form method="post" enctype="multipart/form-data" action="page_new_book.php">
	<table cellpadding=10 border=1>
		<tr>
			<td>Enter Book ID Number
			<td><input type="text" name="t1" value="<?php echo $id ?>" disabled>
		<tr>
			<td>Enter Book Name
			<td><input type="text" name="t2">
		<tr>
			<td>Select Book Author
			<td><input type="text" name="t3">
		<tr>
			<td>Select Book Subject
			<td><select name="t4">
				<option>English
				<option>Mathematics
				<option>Hindi
				<option>Science
				<option>Computer
				</select>
		<tr>
		
			<td>Select Pic of Book
			<td><input type="file" name="fp">
		<tr>
			<td colspan=2 align=center>
			<input type='submit' value='Register Book' name='btn'>
		</table>
	</form>
</html>
		
	