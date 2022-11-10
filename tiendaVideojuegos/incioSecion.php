<?php

$email = $_POST['email'];
$clave = $_POST['clave'];
session_start();
$_SESSION['email']=$email;

include_once('dataBaseConexion.php');

$sql="SELECT * FROM `usuarios` WHERE email = '$email' AND clave = '$clave'";
$resultado=mysqli_query($conexion,$sql);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:registro.html");
} else {
    ?>
    <?php
include("index.html");
    ?>
    <h1> usuario y/o clave erroneos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
