<?php

$conexion = mysqli_connect('containers-us-west-49.railway.app', 'root', 'IBAOn08BrJ34rSAG0Ybu', 'railway', '6089');

$query = $conexion->query("SELECT * FROM doctor");

echo '<option value="0">Seleccione el doctor</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['coddoc']. '">' . $row['nomdoc'] . '</option>' . "\n";
}



