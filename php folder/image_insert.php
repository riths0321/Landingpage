<?php
//enctype ka use file upload karane ke liye karte hai
error_reporting(0);
?>
<html>
<head>
	<title>my image</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		File:
		<input type="file" name="file" value=""/><br><br>
		<input type="submit" name="upload"  value="upload"/>
		<audio controls>
			<source src="C:/Users/91626/Music" type="audio/mpeg">
		</audio>
		<video controls>
			<source src="" type="video/mp4">
		</video>
	</form>
</body>
</html>
<?php
$folder ="img/";
//echo $folder;
//echo $_FILES["file"];
//print_r($_FILES["file"]);
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];
$folder = "img/".$filename;
echo $folder;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100px' width='100px'>";
?>