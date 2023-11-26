<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StyleGrupos.css">
    <title>Tus Grupos</title>
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

    <h1>Tus grupos</h1>
    <a href="CrearGrupo.html"><button class="join-button-crear">Crear grupo</button></a>


    <ul class="group-list">
        <li class="group">
            <img src="img/grupo2.jpg" alt="Grupo 1">
            <div class="group-info">
                <h2>Fitnes club gym</h2>
                <p>Bienvenido a Fitness Club Gym, tu destino para un estilo de vida saludable y activo. En nuestro
                    gimnasio, nos enorgullece ofrecer una amplia gama de instalaciones y servicios de primera clase para
                    ayudarte a alcanzar tus metas de acondicionamiento físico. Nuestras modernas instalaciones cuentan
                    con equipos de última generación</p>
            </div>

        </li>
        <li class="group">
            <img src="img/grupo2.jpg" alt="Grupo 2">
            <div class="group-info">
                <h2>Power Gym</h2>
                <p> Power Gym, donde la fuerza y el rendimiento se encuentran! En Power Gym, nos dedicamos a
                    proporcionar un entorno de entrenamiento de élite para aquellos que buscan maximizar su potencial
                    físico y alcanzar niveles de fuerza inigualables.</p>
            </div>

        </li>

    </ul>
    <h1> Grupos</h1>
    <ul class="group-list">
        <li class="group">
            <img src="img/grupo2.jpg" alt="Grupo 1">
            <div class="group-info">
                <h2>Fitnes club gym</h2>
                <p>Bienvenido a Fitness Club Gym, tu destino para un estilo de vida saludable y activo. En nuestro
                    gimnasio, nos enorgullece ofrecer una amplia gama de instalaciones y servicios de primera clase para
                    ayudarte a alcanzar tus metas de acondicionamiento físico. Nuestras modernas instalaciones cuentan
                    con equipos de última generación</p>
            </div>
            <button class="join-button">Unirme</button>
        </li>
        <li class="group">
            <img src="img/grupo2.jpg" alt="Grupo 2">
            <div class="group-info">
                <h2>Power Gym</h2>
                <p> Power Gym, donde la fuerza y el rendimiento se encuentran! En Power Gym, nos dedicamos a
                    proporcionar un entorno de entrenamiento de élite para aquellos que buscan maximizar su potencial
                    físico y alcanzar niveles de fuerza inigualables.</p>
            </div>
            <button class="join-button">Unirme</button>
        </li>

    </ul>
</body>

</html>