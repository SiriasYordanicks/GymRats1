<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StylesEditarPerfil.css">
    <title>Editar Perfil</title>
</head>
<body>

    <div class="container">
        <h1>Editar Perfil</h1>
        <form id="profile-form">
            <div class="form-group">
                <label for="first-name">Nombre</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Apellido</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="form-group">
                <label for="exercise">Ejercicio preferido</label>
                <input type="text" id="exercise" name="exercise" required>
            </div>
            <div class="form-group">
                <label for="deadlift">PR en peso muerto</label>
                <input type="text" id="deadlift" name="deadlift" required>
            </div>
            <div class="form-group">
                <label for="squat">PR sentadilla</label>
                <input type="text" id="squat" name="squat" required>
            </div>
            <div class="form-group">
                <label for="bench-press">PR press banca plano</label>
                <input type="text" id="bench-press" name="bench-press" required>
            </div>
            <div class="form-group">
                <label for="profile-image">Foto de Perfil</label>
                <input type="file" id="profile-image" name="profile-image" required>
            </div>
            <div class="buttons">
                <button type="submit">Guardar Cambios</button>
                <button type="button" id="cancel-button">Cancelar</button>
            </div>
        </form>
        <div class="notification" id="notification">
            
        </div>
    </div>
</body>
</html>
