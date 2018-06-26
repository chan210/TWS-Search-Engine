<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Woogle</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/properstyle.css">
<link href='http://fonts.googleapis.com/css?family=Signika:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<!--[if !IE]><!-->
	<!--<![endif]-->
  </head>
  <body>
 <!-- Wrap all page content here -->
    <div id="wrap">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <a href="#"><img src="images/facebook.png"></a>
		<a href="#"><img src="images/googleplus.png"></a>
		<a href="#"><img src="images/twitter_v2.png"></a>
		<a href="#"><img src="images/gmail-icon.png"></a>
      </ul>

      <ul class="nav navbar-nav navbar-right">
	 <li><a href="index.php"><button type="button" class="btn btn-primary btn-lg">Home.</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <!-- Begin page content -->
      <div class="container">
	  <center>
 <h3>File Insert Page </h3>
	<hr>
	<form action='' method='post' enctype="multipart/form-data" name="uploadform" >
	<table class="table table-bordered">
		<tr>
		<td>File Title</td>
		<td><input type='text' name='title'></td>
		</tr>
		<tr>
		<td>File Tags ( For eg: tag1, tag2, etc )</td>
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

</div></div>
<div id="footer">

<center><a href="#"><button type="button" class="btn btn-success btn-lg">Created By : Mohsin Dodhia</button></center>

    </div>
</body>
</html>
</html>
