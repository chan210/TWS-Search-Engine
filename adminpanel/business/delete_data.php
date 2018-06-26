<?php include("header.php"); ?> <center>

	<form action='delete_data.php' method='post'>
	<table class="table table-bordered">
		<tr>
		<td>Business Name</td>
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
	$tws_name=$_POST['name'];
	if(empty($tws_name))
{

	echo " Kindly enter Company name!<br>";	
}
else{
include("../dbinfo.php");
			$query="DELETE FROM tws WHERE tws_name = '$tws_name'";
			if(mysqli_query($conn,$query))
			{
			echo "Data Successfully deleted!";
			}else
			{
				echo "Failed";
				}
}
	}

?>
<hr>
<table class='table table-hover'>
<tr><th>Business name</th></tr>
<?php
include("../dbinfo.php");


$sql = "SELECT tws_name, tws_tags FROM tws";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

	

		echo"<tr><td>" . $row["tws_name"]. "   </td></tr>";

    }
} else {
    echo "0 results";
}
?></table></center>
<?php include("../footer.php"); ?>