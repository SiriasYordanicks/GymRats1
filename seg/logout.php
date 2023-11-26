<?php
//etiqueta inicio de sesion
@session_start();
//destruccion de sesion para cerrar log
session_destroy();
//redireccionar a pago
header("Location: ../index.php");
?>