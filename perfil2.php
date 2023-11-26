<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Styles/StylePerfil.css">
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

    

    
    <div class="profile-card">
        <div class="profile-image">
            <img src="img/henry.jpg" alt="Foto de perfil">
        </div>
        <div class="profile-info">
            <h1>Henry Pérez</h1>
            <p>Ejercicio favorito: Press banca</p>
            <p>PR peso muerto: 160kg</p>
            <p>PR sentadilla : 100kg</p>
            <p>PR press banca: 100kg</p>

            <a href="editarPerfil.html"><button class="join-button">Editar Perfil</button></a>
        </div>
    </div>
</body>
</html>
