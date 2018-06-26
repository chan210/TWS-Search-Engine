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
    <script src="js/bootstrap.min.js"></script><center>
<u><h1>Login </h1></u><hr>
<form action='admin.php' method='post'>
<table class="table table-bordered">
<tr><td>Username : </td> <td><input type="text" name="admin_name"></td></tr> 
<tr><td>Password : </td> <td> <input type="password" name="admin_pass"></td></tr> 
<tr><td></td> <td><input type="submit" name="submit"></td></tr>

<hr>

</center>
<?php echo @$_GET['logout']; ?>
	<?php echo @$_GET['error']; ?>
</body>
</html>
<?php
session_start();

if(isset($_POST['submit']))
{
require_once('dbinfo.php');
	$admin_name= $_SESSION['admin_name']= $_POST['admin_name'];
	$admin_pass= $_POST['admin_pass'];

	$query = "select * from admin where user='$admin_name' AND pass='$admin_pass'";
	$rs=$conn->query($query);
	if(mysqli_num_rows($rs)==1)
	{
		echo" <a href='adminpanel'> Success, Click here to proceed. </a>";
	
	}
	else
	{
		echo "<script>alert('Username or password is incorrect')</script>";
	}
}
?>
      
