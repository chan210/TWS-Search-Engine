<?php include("header.php"); ?> <center>

	<form action='delete_files.php' method='post'>
	<table class="table table-bordered">
		<tr>
		<td>Files Name</td>
		<td><input type='text' name='name'></td>
		
		</tr>
		<tr>
		<td></td>
		<td>
<input type='submit' class="btn btn-success btn-lg" name='submit' value='submit' widtd="100%"></td>
		</tr>
		<tr>
		</tr>
		</table>
	</form>
	
	

<?php
 
if(isset($_POST['submit'])){
	$f_name=$_POST['name'];
	if(empty($f_name))
{

	echo " Kindly enter file name! ";	
}
else{
include("../dbinfo.php");
			$query="DELETE FROM files where f_name = '$f_name'";
			if(mysqli_query($conn,$query))
			{
			echo "File Successfully deleted!";
			}else
			{
				echo "Failed";
				}
}
	
}
?>
<hr>
<table class='table table-hover'>
<tr><th>File name</th></tr>
<?php
include("../dbinfo.php");


$sql = "SELECT * from files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo"<table class='table table-bordered'>";


		echo"<tr><td>" . $row["f_name"]. "   </td>";

		
    }
} else {
    echo "0 results";
}
?></table></center>
<?php include("../footer.php"); ?>