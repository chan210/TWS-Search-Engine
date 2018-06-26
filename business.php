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
	  <li><a href="user_insert_data.php"><button type="button" class="btn btn-danger btn-lg">Get your business listed!!!</button></a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <!-- Begin page content -->
      <div class="container">
<center>
<div class="erb-image-wrapper"></br>
<a href="index.php"><img src="images/businesssearch.png"></a></div></br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input id="search" type="text" name="search" class="ibtn-style">&nbsp;&nbsp;

			&nbsp;&nbsp;&nbsp;
		<input type="submit" name="btn" class="btn-style" value="Submit" />
</form>
</center>
</div>



<?php

// The Process

require_once('dbinfo.php');
if (isset($_POST["search"]))
{
$ns=$_REQUEST['search'];
$name = preg_replace('/[^\da-z]/i', '', $ns);
$name=preg_replace('/\s*/', '', $name);
$name = trim($name);
$name = stripslashes($name);
$name = htmlspecialchars($name);
$name=str_replace(array('.', ','), '' , $name);
$name = strtolower($name);


$sql ="SELECT * FROM tws where tws_tags='".$name."' or tws_tags LIKE '".$name.",%' or tws_tags LIKE '%, ".$name.",%' or  tws_tags LIKE '%, ".$name."'";

$rs=$conn->query($sql);

	if($rs===false)
	{
		trigger_error('Wrong SQL: '.$sql.' Error: '.$conn->error,E_USER_ERROR);
	}
	else
	{
		$rows_returned=$rs->num_rows;
		echo("<br>Results Generated : ".$rows_returned);
			echo "<table border=1>";
		echo "<thead>";
		echo "<tr>";
		echo"<th>Name</th>
			<th>Contact</th>
			<th>E-mail</th>
			<th>Website</th>
			<th>Address</th>";
		echo "</tr>";
		echo "</thead>";

		while($arr=$rs->fetch_array(MYSQLI_ASSOC))
		{
			echo "<tbody>";
			echo "<tr>";
			echo "<td>" . $arr['tws_name'] . "</td>";
			echo "<td>" . $arr['tws_mobile'] . "</td>";
			echo "<td>" . $arr['tws_email'] . "</td>";
			echo '<td> <a href="http://www.'.$arr['tws_website'] .'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visit Website</a></td>';
			echo "<td>" . $arr['tws_address'] . "</td>";
			echo "</tr>";
			echo "</tbody>";
		}
	}

echo "</table>";
}
?>
</div>
</div>
<div id="footer">

<center><a href="#"><button type="button" class="btn btn-success btn-lg">Created By : Mohsin Dodhia</button></center>

    </div>
</body>
</html>
