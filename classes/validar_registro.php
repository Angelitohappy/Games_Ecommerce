<?php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
}

$username = $_POST['username'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$role = 'user';

$resultado = $conexion->prepare("INSERT INTO users (email, password, username,role) VALUE (:email, :contraseña, :username, :role)");

$resultado->bindParam(":username", $username);
$resultado->bindParam(":email", $email);
$resultado->bindParam(":contraseña", $contraseña);
$resultado->bindParam(":role", $role);


if ($resultado->execute()) {
    header('location: ../index.php');
} else {
    echo "error";
}
