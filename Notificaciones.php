<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificaciones</title>
    <link rel="stylesheet" href="Styles/notificaciones.css">
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
    <div class="notifications">
        <div class="notification">
            <div class="avatar"></div>
            <div class="content">
                <p><strong>Henry toston pérez</strong> te mencionó en una publicación.</p>
                <span>Hace 5 minutos</span>
            </div>
        </div>
        <hr>
        <div class="notification">
            <div class="avatar"></div>
            <div class="content">
                <p><strong>Jose pichardo</strong> ha comentado tu foto.</p>
                <span>Hace 15 minutos</span>
            </div>
        </div>
        <hr>
        <div class="notification">
            <div class="avatar"></div>
            <div class="content">
                <p><strong>Henry toston pérez</strong> te mencionó en una publicación.</p>
                <span>Hace 5 minutos</span>
            </div>
        </div>
        <hr>
        <div class="notification">
            <div class="avatar"></div>
            <div class="content">
                <p><strong>Jose pichardo</strong> ha comentado tu foto.</p>
                <span>Hace 15 minutos</span>
            </div>
        </div>
    </div>
</body>
</html>
