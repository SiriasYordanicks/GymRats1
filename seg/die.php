<?php
//Seguridad de sesiones
session_start();
//eliminacion de mensaje de error defecto
error_reporting(0);
//declaracion de variable
$varsesion=$_SESSION['usuario']; 
//si la variable es igual nulo o vacio
if($varsesion== null || $varsesion=''){
    //mandar mensaje
    echo '<script>alert("Inicio de sesion invalido verifique su sesion")</script>';
    //matar la sesion
    die();
}
?>