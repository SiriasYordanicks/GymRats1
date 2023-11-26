<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Grupo</title>
    <link rel="stylesheet" href="Styles/StylesCrearGrupo.css">
</head>
<body>
    <div class="header">
        <h1>Creación de Grupos</h1>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nombre-grupo">Nombre del Grupo:</label>
                <input type="text" id="nombre-grupo" name="nombre-grupo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="privacidad">Configuración de Privacidad:</label>
                <select id="privacidad" name="privacidad">
                    <option value="publico">Público</option>
                    <option value="privado">Privado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="miembros">Miembros del Grupo:</label>
                <input type="text" id="miembros" name="miembros" required>
            </div>
            <div class="buttons">
                <button type="submit" class="create-button">Crear Grupo</button>
                <button type="button" class="cancel-button">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>
