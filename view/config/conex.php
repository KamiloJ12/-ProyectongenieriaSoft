<?php
$hostname_conex = "containers-us-west-49.railway.app";
$database_conex = "railway";
$username_conex = "root";
$password_conex = "IBAOn08BrJ34rSAG0Ybu";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 

?>
