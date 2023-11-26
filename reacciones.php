<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/reacciones.css">
    <title>Comentarios</title>
</head>
<body>
    <div class="container">
        <h1>Deja un Comentario</h1>
        <form id="comment-form">
            <div class="form-group">
                <textarea id="comment" name="comment" rows="5" placeholder="Escribe tu comentario..."></textarea>
            </div>
<!--             <div class="reactions">
                <span class="reaction">👍</span>
                <span class="reaction">❤️</span>
                <span class="reaction">😂</span>
                <span class="reaction">😠</span>
            </div> -->
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
