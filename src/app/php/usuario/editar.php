<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("../conexion.php");

$editar = "UPDATE usuario SET nombre = '$params->nombre', usuario= '$params->usuario',clave sha1 ('$params->clave') where id_usuario=$params->id_usuario";

mysqli_query($conexion,$editar) or die ('no edito');

class Result {}

$response = new Result();
$response ->resultado = 'OK';
$response ->mensaje = 'datos modificados';

header('Content-Type: application/json');
echo json_encode($response);



?>