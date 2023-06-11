<?php

$conexion = mysqli_connect('containers-us-west-49.railway.app', 'root', 'IBAOn08BrJ34rSAG0Ybu', 'railway', '6089');

$el_horario = $_POST['horario'];

$query = $conexion->query("SELECT * FROM horario WHERE coddoc = $el_horario");



while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codhor']. '">' . $row['nomhor'] . '</option>' . "\n";
}
