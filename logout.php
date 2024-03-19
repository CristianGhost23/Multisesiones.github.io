<?php
session_start();

echo '<h2>'.$_SESSION["user"].'</h2>';

$_SESSION["user"] = null;
$_SESSION["id"] = null;

// Destruir todas las variables de sesión.
session_destroy();

// Redirigir al usuario a la página de inicio de sesión.
header("Location: index.php");
exit;
?>
