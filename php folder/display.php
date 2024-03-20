<style type="text/css">
	th
	{
		background-color:orange;
		color:white;
	}
	td
	{
		padding: 5px;
		width:1000px;
		text-align: center;
	}
</style>
<?php
include ("connection.php");
error_reporting(0);
$query="SELECT * FROM STUDENT_DATA";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;


if($total !=0)
{

?>
<table border="2">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>fname</th>
		<th>class</th>
		<th>image</th>
		<th colspan="2">operations</th>
	</tr>
<?php
    while ($result=mysqli_fetch_array($data))
    {
        echo 
        "<tr>
			<td>".$result['id']."</td>
			<td>".$result['name']."</td>
			<td>".$result['fname']."</td>
			<td>".$result['class']."</td>
			<td><a href='$result[image]'><img src='".$result['image']."' height='100px' width='100px'></a></td>
			<td><a href='update.php?id=$result[id]&sn=$result[name]&fn=$result[fname]&cl=$result[class]'>edit</a></td>
			<td><a href='delete.php?id=$result[id]' onclick=' return checkdelete() '>delete</td>
	   </tr>";
    }
}
else
{
     echo "Table has no record";
}
?>
</table>
<script>
function checkdelete()
{
	 return confirm('Are you sure to want delete data???');
}
</script>