<?php
	
	$mysqli = new mysqli('containers-us-west-49.railway.app', 'root', 'IBAOn08BrJ34rSAG0Ybu', 'railway', '6089');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
