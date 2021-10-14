<?php
	include "connect.php";
	include "heading.php";
	
	$s="select max(rno) from student";
	$rs=mysqli_query($con,$s);
	$r=mysqli_fetch_array($rs);
	
		$id=$r[0]+1;
		
 
	if(isset($_POST['btn']))
	{
		$a=$_POST["t1"];
		$b=$_POST["t2"];
		$c=$_POST["t3"];
		$d=$_POST["t4"];
		$e=$_POST["t5"];
		$f=$_POST["t6"];
		$g=$_POST["t7"];
		$h=$_POST["t8"];
		
		$source=$_FILES["fp"]["tmp_name"];
		$dest=$_FILES["fp"]["name"];
		
		if(move_uploaded_file($source,$dest))
		{
			$s="insert into student(rno,sname,sgender,sdegree,sem,ctno,pic,userid,userpass) values('$id','$b','$c','$d','$e','$f','$dest','$g','$h')";
			mysqli_query($con,$s);
			echo "<script>alert('STUDENT HAS REGISTERED SUCCEESSFULLY')</script>";
		}
		else
			echo "<script>alert('found error in registeration')</script>";
		
		header("location:page_new_student.php");
		
		
	}
?>

		<form method="POST" enctype="multipart/form-data" action="page_new_student.php">
			<table border=1 cellpadding=10>
					<tr>
						<td>ENTER YOUR ROLE NUMBER
						<td><input type="text" name="t1" value="<?php echo $id ?>" disabled>
					
					<tr>
						<td>ENTER YOUR NAME
						<td><input type="text" name="t2">
					
					<tr>
						<td>ENTER YOUR GENDER
						<td><input type="radio" name="t3" value="Male">Male	
							<input type="radio" name="t3" value="Female">Female	
					
					<tr>
						<td>ENTER YOUR DEGREE
						<td><select name="t4">
							<option>Btech
							<option>Mtech
							<option>BCA
							<option>MCA
							<option>BSC
							<option>MSC
							</select>
					<tr>
						<td>ENTER YOUR SEMESTER
						<td><select name="t5">
							<option>I SEM
							<option>II SEM
							<option>III SEM
							<option>IV SEM
							<option>V SEM
							<option>VI SEM
							<option>VII SEM
							<option>VIII SEM
							</select>

					<tr>
						<td>ENTER YOUR CONTACT NUMBER
						<td><input type="text" name="t6">
						
					<tr>
						<td>ENTER YOUR USER ID
						<td><input type="text" name="t7">
						
					<tr>
						<td>ENTER YOUR PASSWORD
						<td><input type="text" name="t8">
					
					<tr>
						<td>ENTER YOUR PICTURE
						<td><input type="file" name="fp">
					
					<tr>
						<td colspan=2 align=center>
						<input type="submit" value="ENROLL STUDENT" name="btn">
				</table>
			</form>
			