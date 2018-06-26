<?php include("header.php"); ?> <center>
 <h3>File Insert Page </h3>
	<hr>
	<form action='' method='post' enctype="multipart/form-data" name="uploadform" >
	<table class="table table-bordered">
		<tr>
		<td>File Title</td>
		<td><input type='text' name='title'></td>
		</tr>
		<tr>
		<td>File Tags</td>
		<td><input type="text" name="tag"></td>
		</tr>
		<tr>
		<tr>
		<td>Upload File</td>
		<td>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<input name="userfile" type="file" id="userfile"/></td>
		</tr>
		<tr>
		</tr>
		

		
		<tr><td></td><td><input type='submit' class="btn btn-success" name='submit' value='submit'></td></tr><tr></tr>
		
		</table>
</html>
<?php
 
if(isset($_POST['submit'])){
	define('MAX_FILE_SIZE', 2000000);

	$post_name=$_POST['title'];
	$post_tags=$_POST['tag'];
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	
		// image name witd extension
	$file_name = $fileName;
	// save image path'
	$folder='files/';
	$path = $folder . $file_name;


		$result = move_uploaded_file($tmpName, $path);
if(empty($post_name))
{

	echo " Kindly enter File name!<br>";	
}
elseif(empty($post_tags))
{

	echo " Kindly enter tags!<br>";

}

		if (!$result) {
			echo "Kindly select file to upload!";
			exit;
		} else{
			include("../dbinfo.php");
			$query="insert into files (f_name, f_tags, file_name, type, file_path) values ('$post_name','$post_tags','$file_name', '$fileType', '$path')";
			
			if(mysqli_query($conn,$query))
			{
			echo "File uploaded successfully!";
			}
			else{ echo "Failed"; }
		
		
		
	
	
	}
	

}


?>

</center>
<?php include("../footer.php"); ?>