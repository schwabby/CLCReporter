<?php

echo nl2br("\nInitializing datalogin.php \n \n");

//make connection with the database
mysql_connect('DBHOSTNAME','USERNAME','PASSWORD');

//select database
mysql_select_db('DBNAME');

?>