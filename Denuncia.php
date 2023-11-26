<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Denuncia</title>
  <link rel="stylesheet" href="Styles/Denuncia.css"> <!-- Enlaza tu archivo CSS -->
</head>
<body>
  <div class="contenedor">
    <h1>Reportar contenido Inapropiado
    </h1>
    <form action="procesar_denuncia.php" method="post">
      <div class="opciones-denuncia">
        <h2>Selecciona un motivo:</h2>
        <label><input type="radio" name="motivo" value="acoso">Acoso</label>
        <label><input type="radio" name="motivo" value="contenido_inapropiado">Contenido Inapropiado</label>
        <label><input type="radio" name="motivo" value="violacion_terminos">Violación de Términos de Uso</label>
      </div>
      <button class="enviar-btn">Enviar Denuncia</button>
    </form>
  </div>
</body>
</html>


