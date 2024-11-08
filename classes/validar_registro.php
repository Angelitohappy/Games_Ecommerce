<?php
require 'conexion.php';

// Crear usuario
$email = $_POST['email'];
$contraseña =  $_POST['contraseña'];
$nombre = $_POST['NombreUsuario'];
$conexion->crearUsuario($email, $contraseña, $nombre);
