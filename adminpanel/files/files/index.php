<html>
<head>
<title> String to upper. </title>
</head>
<body bgcolor=gold>

<form action="index.php" method="post">

Enter a string to convert it into upper<br>
<input type="text" name="toupper">
<input type="submit">
</form>
</body>
</html>
<?php

$name=$_POST["toupper"];
$b=strtoupper($name);
echo "<br> Result :  <br>$b";

?>