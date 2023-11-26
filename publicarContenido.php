<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/publicarContenido.css">
    <title>Crear Contenido</title>
</head>
<body>
    <div class="container">
        <h1>Crear publicación</h1>
        <form id="content-form">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="tags">Etiquetas</label>
                <input type="text" id="tags" name="tags">
            </div>
            <div class="form-group">
                <label for="media">Adjuntar Multimedia</label>
                <input type="file" id="media" name="media" accept="image/*, video/*">
            </div>
            <div class="form-group">
                <label for="media-link">Enlace Multimedia Externo</label>
                <input type="url" id="media-link" name="media-link">
            </div>
            <div class="buttons">
                <button type="submit">Publicar Contenido</button>
                <button type="button" id="cancel-button">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>
