<?php

include ("connection.php");
error_reporting(0);
 $id=$_GET['id'];
 $sn=$_GET['sn'];
 $fn=$_GET['fn'];
 $cl=$_GET['cl'];
?>
<html>
<head>
</head>
<body>
	<form action="" method="GET">
		Id:
		<input type="number" name="id" placeholder="Enter your id" value="<?php echo $_GET['id'];?>"/><br><br>
		Name:
		<input type="text" name="name" placeholder="Enter your name" value="<?php echo $_GET['sn'];?>"/><br><br>
		Fname:
		<input type="text" name="fname" placeholder="Enter your fname" value="<?php echo $_GET['fn'];?>"/><br><br>
		Class:
		<input type="text" name="class" placeholder="Enter your class" value="<?php echo $_GET['cl'];?>"/><br><br>
             Image:
            <input type="file" name="file" value="<?php echo $_FILES['file']['name'];?>"><br><br>
		<input type="submit" name="update"  value="update">
	</form>
<?php
if ($_GET['update']) 
{
      $id = $_GET['id'];
      $name = $_GET['name'];
      $fname = $_GET['fname'];
      $class = $_GET['class'];
      $filename = $_FILES['file']['name'];
      $tempname = $_FILES['file']['tmp_name'];
      $folder = 'img/'.$filename;
      //echo $folder;
      move_uploaded_file($tempname, $folder);

      $qurey = "UPDATE STUDENT_DATA SET name='$name',fname='$fname',class='$class' WHERE id='$id'";
      //echo $qurey;
      $data = mysqli_query($conn,$qurey);
      //echo $data;
      if($data)
      {
            echo "Update records<a href='display.php'>check list</a>";
      }
      else
      {
           echo "NOT UPDATE record";
      }
      
}
else
{
    echo "not clicked";
}
?>