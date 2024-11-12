<?php
session_start();
require 'Auth.php';

$auth = new Auth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    if ($auth->login($usuario, $contraseña)) {
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario;
        // Redirigir a la página de perfil o inicio
        header("Location: perfil.php");
        exit();
    } else {
        echo "Credenciales incorrectas.";
    }
}
