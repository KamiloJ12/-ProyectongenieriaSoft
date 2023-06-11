<?php
	$contrasena = 'IBAOn08BrJ34rSAG0Ybu';
	$usuario = 'root';
	$nombrebd= 'railway';

	try {
		$bd = new PDO(
			'mysql:host=containers-us-west-49.railway.app; port=6089;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
