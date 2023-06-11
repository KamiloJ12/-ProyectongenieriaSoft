<?php

$conexion = mysqli_connect('containers-us-west-49.railway.app', 'root', 'IBAOn08BrJ34rSAG0Ybu', 'railway', '6089');

$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM doctor WHERE codespe = $el_continente");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['coddoc']. '">' . $row['nomdoc'] . '</option>' . "\n";
}
