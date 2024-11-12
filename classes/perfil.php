<?php
session_start();
require 'Auth.php';

$auth = new Auth();

if (!$auth->isLoggedIn()) {
    echo "Usuario o contraseña invalidos!";
    header("Location: ../index.php");
    exit();
}

echo "Bienvenido, " . $_SESSION['usuario'] . "<br>";

if ($auth->isAdmin()) {
    echo "Tienes acceso a funciones de administrador.";
    header("Location: ../admin/index.php");
} else {
    echo "Eres un usuario normal.";
    header("Location: ../index.php");
}
?>

<a href="logout.php">Cerrar sesión</a>