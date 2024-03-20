<?php
include ("connection.php");
error_reporting(0);
$name = $_POST['name'];
$query = "DELETE FROM CONTACT WHERE name='$name'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script> alert('record delete')</script>";
	?>
	<meta http-equiv='refresh' content='0; url=http://localhost/ritiksahuphp/goinadz/display1.php'>
	<?php
}
else
{
	echo "sorry delete process failed";
}
?>