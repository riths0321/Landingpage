<!--<?php
session_start();
include ("connection.php");
error_reporting(0);
?>-->
<!DOCTYPE html>
<html>
<body>
<form action="#" method="POST">
            Username:
            <input type="text" name="username" value=""><br><br>    
            Password:
            <input type="password" name="password" value=""><br><br>
            <input type="submit" name="login" value="login">
</form>
</body>
</html>
<?php
if (isset($_POST['login'])) 
		{
			$un = $_POST['username'];
			$pw = $_POST['password'];
			//echo $un;
			//echo $pw;
			$query = "SELECT * FROM GOINADZ WHERE username='$un' && password='$pw'";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			//echo $total;
			if ($total==1) 
			{
				//echo "Login confirm";
				$_SESSION['user'] = $un;
				header('location:home.php');
			}
			else
			{
				echo "Login failed";
			}
		}
?>