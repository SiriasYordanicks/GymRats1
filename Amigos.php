<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StyleAmigos.css">
    <title>Lista de Amigos</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/GR.png" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar">
            <button><i class="fas fa-search"></i></button>
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

    <h1>Tus amigos</h1>
    <div class="friend-list">
        <div class="friend">
            <img src="img/henry2.png" alt="Amigo 1">
            <p>Henry pérez</p>
            <div class="status active">Activo</div>
            <button class="enviar-mensaje">Enviar mensaje</button>
        </div>

        <br>
        <div class="friend">
            <img src="img/Jose.jpg" alt="Amigo 2">
            <p>Jose Pichardo
            </p>
            <div class="status inactive">Inactivo</div>
           <button class="enviar-mensaje">Enviar mensaje</button>
        </div>
        
    </div>
</body>
</html>
