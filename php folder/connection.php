<?php

$servername="localhost";
$username="root";
$password="";
$dbname="goinadz";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo " ";
}
else
{
	//echo "connection failed";
	die("connection failed because".mysqli_connect_error());
}
?>