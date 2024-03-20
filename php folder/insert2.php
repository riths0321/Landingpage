<?php
include ("connection.php");
error_reporting(0);
?>
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
	$id = $_GET['id'];
	$na = $_GET['name'];
	$fn = $_GET['fname'];
	$cl = $_GET['class'];

	if($id!="" && $na!="" && $fn!="" && $cl!="")
	{
		$query = "INSERT INTO NEW_STUDENT_DATA VALUES ('$id','$na','$fn','$cl')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "data insert";
		}
		else
		{
			echo "data not insert";
		}

	}
	else
	{
		"all field required";
	}
}

?>
</body>
</html>