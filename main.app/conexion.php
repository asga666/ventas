<?php
$conexion = new mysqli("localhost","root","","happycoppy");
 if($conexion->connect_errno) {
     echo "No se pudo conectar a la base de datos <br>
     <img style='width:400px;height:500px;' src='../misc/sweat.png'>".$conexion->connect_error;
 }
?>