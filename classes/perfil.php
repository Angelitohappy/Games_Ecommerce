<?php
session_start();
require 'Auth.php';

$auth = new Auth();

if (!$auth->isLoggedIn()) {
    header("Location: index.html");
    exit();
}

echo "Bienvenido, " . $_SESSION['usuario'];
?>

<a href="logout.php">Cerrar sesión</a>