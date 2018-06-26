<?php include("header.php"); ?> <center>

	 <h3>Business Insert Page </h3>
	<hr>
	<form action='insert_data.php' method='post'>
	<table class="table table-bordered">
		<tr>
		<td>Company Name</td>
		<td><input type='text' name='name'></td>
		</tr>
		<tr>
		<td>Contact</td>
		<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
		</tr>
		<tr>
		<td>Website</td>
		<td><input type="text" name="website"> </td>
		</tr>
		<tr>
		<td>Address</td>
		<td><input type="text" name="address"></td>
		</tr>
		<tr>
		<td>Tags</td>
		<td><input type="text" name="tags"></td>
		</tr>
		<tr>
		<td></td>
		<td>
<input type='submit' class="btn btn-success btn-lg" name='submit' value='submit'></td>
		</tr>
		<tr>
		</tr>
		</table>
	</form>
	
	

<?php
 
if(isset($_POST['submit'])){
	$tws_name=$_POST['name'];
	$tws_mobile=$_POST['mobile'];
	$tws_email=$_POST['email'];
	$tws_website=$_POST['website'];
	$tws_address=$_POST['address'];
	$tws_tags=$_POST['tags'];

if(empty($tws_name))
{

	echo " Kindly enter your Company name!<br>";	
}
elseif(empty($tws_mobile))
{

	echo " Kindly enter your mobile number!<br>";

}
elseif(empty($tws_email))
{

	echo " Kindly enter your email-id!<br>";

}
elseif (!filter_var($tws_email, FILTER_VALIDATE_EMAIL))
 {
      echo "Invalid email format"; 
 }
elseif(empty($tws_website))
{

	echo " Kindly enter your website!<br>";

}
elseif(empty($tws_address))
{

	echo " Kindly enter your address!<br>";

}
elseif(empty($tws_tags))
{

	echo " Kindly enter your Tags!<br>";

}
else{	
include("../dbinfo.php");
			$query="INSERT INTO `tws`(`tws_name`, `tws_mobile`, `tws_email`, `tws_website`, `tws_address`, `tws_tags`) VALUES  ('$tws_name','$tws_mobile','$tws_email','$tws_website', '$tws_address', '$tws_tags')";
			if(mysqli_query($conn,$query))
			{
			echo "Data Successfully inserted!";
			}else
			{
				echo "Failed";
				}
}
}

?>
</center>
<?php include("../footer.php"); ?>