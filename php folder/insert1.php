<!--<?php
include ("connection.php");
error_reporting(0);
?>-->
<html>
<head>
</head>
<body>
	<form action="" method="GET">
		Id:
		<input type="number" name="id" placeholder="Enter your id" value=""/><br><br>
		Name:
		<input type="text" name="name" placeholder="Enter your name" value=""/><br><br>
		Fname:
		<input type="text" name="fname" placeholder="Enter your fname" value=""/><br><br>
		Class:
		<input type="text" name="class" placeholder="Enter your class" value=""/><br><br>
		<input type="submit" name="submit"  value="submit">
	</form>
<?php
if ($_GET['submit']) 
{
	$id=$_GET['id'];
	$sn=$_GET['name'];
	$fn=$_GET['fname'];
	$cl=$_GET['class'];

	if ($id!="" && $sn!="" && $fn!="" && $cl!="") 
	{
	   
		$query = "INSERT INTO STUDENT_DATA VALUES('$id','$sn','$fn','$cl')";
		$data=mysqli_query($conn, $query);

		if ($data)
		{
			echo "Data Inserted into database";
		}
	}
	else
	{
		echo "All fields are required";
	}
	
}

?>
</body>
</html>