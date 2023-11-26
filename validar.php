<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT * FROM usuarios where user='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:Home.php");
}
else{
?>
<?php
include("index.php");
?>
<?php
echo '<script>alert("ingrese usuario y contraseña válidos")</script>';
?>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conex);