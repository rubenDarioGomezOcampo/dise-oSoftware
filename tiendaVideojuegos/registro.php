<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$clave = $_POST['clave'];
include_once("dataBaseConexion.php");
// $conectar=conn();
$sql="INSERT INTO `usuarios` (`nombre`, `apellido`, `telefono`, `email`, `clave`) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$clave')";
$resul=mysqli_query($conexion,$sql)or trigger_error("query failed" .mysqli_error($conexion), E_USER_ERROR);
?>
<meta http-equiv="refresh" content="1;url=principal.html"/>