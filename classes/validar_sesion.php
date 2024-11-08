<?php
require 'conexion.php';


$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

if ($conexion->validarUsuario($email, $contraseña)) {
    header("location:");
} else {
    header("location:");
}
