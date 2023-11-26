<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Forma parte de la red social fitness más popular del momento. ¡Únete a nosotros!">
    <title>Únete a nosotros</title>
    <link rel="stylesheet" href="./Styles/style1.css">
    <script defer src="./script1.js"></script>

    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border: 2px solid #3498db;
            color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Estilo para el hover */
        .button:hover {
            background-color: #3498db;
            color: #ffffff;
        }
    </style>

</head>

<body>
    <div class="container">
        <section class="left">
            <img src="img/GR.png" alt="Imagen Grande" loading="lazy">
        </section>
        <section class="right">
            <h1 style = "font-family:optima;">¡Únete a nosotros!</h1>
            <p style = "font-family:optima;">Forma parte de la red social fitness más popular del momento.</p>
            <div class="buttons">
                <a href="registro.php"><button class="register-button button">Registrarse</button></a>
                <br>
                <a href="iniciarSesion.php"><button class="login-button button">Iniciar Sesión</button></a>
            </div>
        </section>
    </div>
</body>

</html>