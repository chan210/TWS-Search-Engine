<?php include("header.php"); ?> <center>
 <h3>Image Insert Page </h3>
	<hr>
	<form action='' method='post' enctype="multipart/form-data" name="uploadform" >
	<table class="table table-bordered">
		<tr>
		<td>Image Title</td>
		<td><input type='text' name='title'></td>
		</tr>
		<tr>
		<td>Image Tags</td>
		<td><input type="text" name="tag"></td>
		</tr>
		<tr>
		<tr>
		<td>Image Image</td>
		<td>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<input name="userfile" type="file" id="userfile"/></td>
		</tr>
		<tr>
		</tr>
		

		
		<tr><td></td><td><input type='submit' class="btn btn-success btn-lg" name='submit' value='submit'></td></tr><tr></tr>
		
		</table>
</html>
<?php
 
if(isset($_POST['submit'])){
	define('MAX_FILE_SIZE', 2000000);
	$permitted = array('image/jpeg', 'image/pjpeg', 'image/png', 'image/gif');
	$post_name=$_POST['title'];
	$post_tags=$_POST['tag'];
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	
		// image name witd extension
	$image_name = $fileName;
	// save image path'
	$folder='images/';
	$path = $folder . $image_name;
if(empty($post_name))
{

	echo " Kindly enter image name!<br>";	
}
elseif(empty($post_tags))
{

	echo " Kindly enter tags!<br>";

}
elseif(empty($fileName))
{

	echo " Kindly select image to upload!<br>";

}
	if (in_array($fileType, $permitted) && $fileSize > 0 && $fileSize <= MAX_FILE_SIZE) {
		//store image to the upload directory
		$result = move_uploaded_file($tmpName, $path);

		if (!$result) {
			echo "Error uploading image file";
			exit;
		} else{
			include("../dbinfo.php");
			$query="insert into pictures (p_name, p_tags, image_name, type, file_path) values ('$post_name','$post_tags','$image_name', '$fileType', '$path')";
			
			if(mysqli_query($conn,$query))
			{
			echo "Image uploaded successfully!";
			}
			else{ echo "Failed"; }
		
		
		}
	
	
	}
	

}


?>

</center>
<?php include("../footer.php"); ?>