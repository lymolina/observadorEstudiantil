<?php
$servidor = "localhost"; 
$usuario = "root";
$clave = "";
$bd = "observador";

$conexion = mysqli_connect($servidor, $usuario, $clave) or die ("no se conecta a mysql");
mysqli_select_db($conexion, $bd) or die ("no encontro la base de datos");

?>