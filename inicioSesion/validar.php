<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include_once("db.php");
 
$consulta="SELECT*FROM user where usuario='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas) {
    header("location:home.php.php");

} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">error de autenticacion</h>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);