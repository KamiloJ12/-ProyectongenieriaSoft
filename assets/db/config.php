<?php
session_start();

// Define database
define('dbhost', 'containers-us-west-49.railway.app');
define('dbuser', 'root');
define('dbpass', 'IBAOn08BrJ34rSAG0Ybu');
define('dbname', 'railway');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
