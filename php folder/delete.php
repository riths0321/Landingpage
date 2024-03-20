<?php
include ("connection.php");
error_reporting(0);
$id = $_GET['id'];
$query = "DELETE FROM STUDENT_DATA WHERE ID='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script> alert('record delete')</script>";
	?>
	<meta http-equiv='refresh' content='0; url=http://localhost/ritiksahuphp/goinadz/display.php'>
	<?php
}
else
{
	echo "sorry delete proces failed";
}
?>