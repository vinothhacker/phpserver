<?php
$databaseHost = 'database-2.cd00ioqg2b8z.ap-south-1.rds.amazonaws.com';
$databaseName = 'basic';
$databaseUsername = 'admin';
$databasePassword = '12345678';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
