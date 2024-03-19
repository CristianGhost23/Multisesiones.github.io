<?php

session_start();
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = $_POST['username'];
}

echo '<h2>'.$_POST["username"] .' </h2> </br>';


echo '<h2>'.$_POST["user"] .' </h2> ';

echo '<h2>'.$_SESSION["user"] .' </h2> ';
if (!isset($_SESSION["id"])) {
    session_regenerate_id();
    $_SESSION["id"] = session_id();

}

echo '<h1>'.session_id().'</h1>';

print_r($_POST);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
</head>
<body>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
