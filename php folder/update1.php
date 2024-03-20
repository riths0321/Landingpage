<?php
include ("connection.php");
error_reporting(0);
 $na=$_POST['na'];
 $mo=$_POST['mo'];
 $em=$_POST['em'];
 $me=$_POST['me'];
?>
<html>
<head>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		Name:
		<input type="text" name="name" placeholder="Enter your name" value="<?php echo $_POST['na'];?>"/><br><br>
		Mobile:
		<input type="number" name="mobile" placeholder="Enter your mobile" value="<?php echo $_POST['mo'];?>"/><br><br>
		Email:
		<input type="email" name="email" placeholder="Enter your email" value="<?php echo $_POST['em'];?>"/><br><br>
		Message:
		<input type="text" name="message" placeholder="Enter your message" value="<?php echo $_POST['me'];?>"/><br><br>
            Image:
            <input type="file" name="file" value="<?php echo $_FILES['file']['name'];?>"><br><br>
		<input type="submit" name="update"  value="update">
	</form>
<?php
if ($_POST['update']) 
{
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $filename = $_FILES['file']['name'];
      $tempname = $_FILES['file']['tmp_name'];
      $folder = 'img/'.$filename;
      //echo $folder;
      move_uploaded_file($tempname, $folder);

      $qurey = "UPDATE CONTACT SET mobile='$mobile',email='$email',message='$message',image='$folder' WHERE name='$name'";
      //echo $qurey;
      $data = mysqli_query($conn,$qurey);
      //echo $data;
      if($data)
      {
            echo "Update records<a href='display1.php'>check list</a>";
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