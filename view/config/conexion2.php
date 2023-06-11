<?php
function conectar(){
$conexion=null;
$host='containers-us-west-49.railway.app';
$db='railway';
$user = "root";
$pass= "IBAOn08BrJ34rSAG0Ybu";
try {
  $conexion= new PDO('mysql:host='.$host.';dbname='.$db, $user,$pass);


} catch (PDOException $e) {
  echo '<p> No se puede conectar a la base de datos </p>';
  exit;
}
return $conexion;


}

 ?>
