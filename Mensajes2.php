<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Mensaje Privado</title>
    <link rel="stylesheet" href="Styles/StylesMensajes2.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/GR.png" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar">
            <button class="boton-personalizado">Buscar</button>
            
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="Perfil.php">Ver Perfil </a></li>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Amigos.php">Amigos</a></li>
                <li><a href="Grupos.php">Grupos</a></li>
                <li><a href="Mensajes2.php">Mensajes</a></li>
                <li><a href="Notificaciones.php">Notificaciones</a></li>
                <li><a href="Notificaciones.php">Configuraciones</a></li>
                <li>
                    <?php
                    //btn de cierre de sesion
                    echo '<a href="seg/logout.php">Cerrar Sesión</a>';
                    ?>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Enviar Mensaje Privado</h1>
        <form>
            <div class="form-group">
                <label for="nombre-usuario">Nombre de Usuario:</label>
                <input type="text" id="nombre-usuario" name="nombre-usuario" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="adjuntar-archivo">Adjuntar archivo multimedia:</label>
                <input type="file" id="adjuntar-archivo" name="adjuntar-archivo">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
