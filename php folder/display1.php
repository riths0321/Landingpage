<style type="text/css">
	th
	{
		background-color:orange;
		color:black;
	}
	td
	{
		padding: 10px;
		width:200px;
		text-align: center;
	}
</style>
<?php
include ("connection.php");
error_reporting(0);
$query="SELECT * FROM CONTACT";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;


if($total !=0)
{

?>
<div class="container mt-3">
	<input class="form-control" id="myInput" type="text" placeholder="Search.." size="185px"><br><br>
<table border="2">
	
	<tr id="myTable">
		<th>name</th>
		<th>mobile</th>
		<th>email</th>
		<th>message</th>
		<th>image</th>
		<th colspan="2">operations</th>
	</tr>
<?php
    while ($result=mysqli_fetch_array($data))
    {
        echo 
        "<tr>
		<td>".$result['name']."</td>
		<td>".$result['mobile']."</td>
		<td>".$result['email']."</td>
		<td>".$result['message']."</td>
		<td><a href='$result[image]'><img src='".$result['image']."' height='100px' width='100px'></a></td>
		<td><a href='update1.php?id=$result[name]&sn=$result[mobile]&fn=$result[email]&cl=$result[message]'>edit</a></td>
		<td><a href='delete1.php?id=$result[name]' onclick=' return checkdelete() '>delete</td>
	   </tr>";
    }
}
else
{
     echo "Table has no record";
}
?>
</table>
</div>
<script>
function checkdelete()
{
	 return confirm('Are you sure to want delete data???');
}
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>