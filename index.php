
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Inicio de Sesión</h2>

        <form method="post" action="home.php">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>
