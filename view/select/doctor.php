<?php

$conexion = mysqli_connect('containers-us-west-49.railway.app', 'root', 'IBAOn08BrJ34rSAG0Ybu', 'railway', '6089');

$query = $conexion->query("SELECT * FROM specialty");

echo '<option value="0">Seleccione la especialidad</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codespe']. '">' . $row['nombrees'] . '</option>' . "\n";
}



