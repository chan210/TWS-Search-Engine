<?php
session_start();

if(!$_SESSION['admin_name'])
{
header('location:../../admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Web Search</title>

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
<center>
<div class="panel panel-default"> <div class="panel-body">
<h1>Welcome to Admin Panel :) </h1>
</div>
</div>
Welcome, <?php echo $_SESSION['admin_name']; ?><hr>
<a href="../business" class="btn btn-warning btn-lg" role="button">Business</a>
<a href="../files" class="btn btn-warning btn-lg" role="button">files</a>
<a href="../pictures" class="btn btn-warning btn-lg" role="button">Images</a>
 <a href='logout.php'><button type="button" class="btn btn-warning btn-lg" >Log out</button></a></h3>

<hr></center>