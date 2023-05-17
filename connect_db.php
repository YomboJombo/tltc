<?php
// Database connection data on XAMPP server
// mySQL user name
$user = "root" ;
// $pass = "" ; // Empty string - no password
$pass = "" ;
// Database name
$db = "local_theatre" ;
// Server name
$server = "localhost" ;

// PDO connection data
$PDOdata = "mysql:host=" . $server . ";dbname=" . $db ;
// Connect and open the MySQL database using this connection string
$connect = new PDO($PDOdata, $user, $pass);

// Use this string format to check for any connection error
// Processing will stop here if an error occurs
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>