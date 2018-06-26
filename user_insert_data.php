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


      <ul class="nav navbar-nav navbar-right">
	  <li><a href="index.php"><button type="button" class="btn btn-primary btn-lg">Home.</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <!-- Begin page content -->
      <div class="container">
	  <center>

	 <h3>Business Insert Page </h3>
	<hr>
	<form action='user_insert_data.php' method='post'>
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
include("dbinfo.php");
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
</div></div>
<div id="footer">

<center><a href="#"><button type="button" class="btn btn-success btn-lg">Created By : Mohsin Dodhia</button></center>

    </div>
</body>
</html>
</html>
