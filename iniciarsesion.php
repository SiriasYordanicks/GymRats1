<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style3.css">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="Styles/style2.css">
</head>

<body>
    <div class="container">
        <img src="img/GR.png" alt="Logo" class="logo">
        <h2>Iniciar Sesión</h2>

        <form action="validar.php" method="post"> 
            <div class="form-group">
             <label for="username">Nombre de Usuario</label>

                <input type="text" id="username" name="usuario" placeholder="Ingresa tu nombre de usuario">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contraseña" placeholder="Ingresa tu contraseña">
            </div>
            <button type="submit" value="Ingresar">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>