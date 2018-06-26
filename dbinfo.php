<?php

// Connecting to database.

$conn=mysqli_connect("localhost","root","root","thewebse_1");

// Check Connection

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>