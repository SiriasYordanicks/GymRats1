<?php
//anexo de comprobacion de sesion
include('seg/die.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StyleHome.css">
    <title>Mi Header</title>
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

    <div class="image-container">
        <div class="image">
           
            <img src="img/Henry00000.jpg" alt="Imagen 1">
            <div class="overlay">+</div>
        </div>
        <div class="image">
            <img src="img/Jose.jpg" alt="Imagen 2">
        </div>
        <div class="image">
            <img src="img/grupo2.jpg" alt="Imagen 3">
        </div>
        <div class="image">
            <img src="img/grupo1.jpg" alt="Imagen 3">
        </div>
        <div class="image">
            <img src="img/henry.jpg" alt="Imagen 3">
        </div>
    </div>



    <div class="container">



        <div class="posts">

            <div class="post">
                <div class="user-info">
                   <a href="perfil2.html"> <img src="img/Henry00000.jpg" alt="Perfil Usuario"></a>
                    
                    <p>Henry Pérez</p>
                    
                    <hr>
                    <p>a actualizado su foto de perfil</p>
                    <hr>
                    <a href="Denuncia.html"><button class="boton-personalizado">Denunciar</button></a>
                </div>
                <img src="img/Henry00000.jpg" alt="Publicación">
                <div class="actions">
                    <div class="react">👍<a href=""><button class="button-publicacion">Me gusta</button></a></div>
                    <div class="comment">💬<a href="reacciones.html"><button class="button-publicacion">Comentar</button></a></div>
                    <div class="share">↩️<button class="button-publicacion">Compartir</button></div>
                </div>
            </div>

        </div>

        <div class="posts">

            <div class="post">
                <div class="user-info">
                    <a href="Perfil.html"><img src="img/Jose.jpg" alt="Perfil Usuario"></a>
                    <p>Jose Pichardo</p>
                    <hr>
                    <p>haz actualizado tu foto de perfil</p>
                </div>
                <img src="img/Jose.jpg" alt="Publicación">
                <div class="actions">

                    <div class="react">👍<a href=""><button class="button-publicacion">Me gusta</button></a></div>
                    <div class="comment">💬<a href="reacciones.html"><button class="button-publicacion">Comentar</button></a></div>
                    <div class="share">↩️<button class="button-publicacion">Compartir</button></div>
                    
                </div>
            </div>

        </div>

    </div>
</body>

</html>