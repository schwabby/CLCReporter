<?php
include 'config/db_config.php';

//echo nl2br("\nInitializing datalogin.php \n \n");

//make connection with the database - 3/17/2016 UPDATED FOR MYSQLI
$connection = mysqli_connect($dbhostname,$dbusername,$dbpass);

//select database - Deprecated by PHP 5.5 - 3/17/2016
//mysql_select_db($dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>