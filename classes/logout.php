<?php
session_start();
require 'Auth.php';

$auth = new Auth();
$auth->logout();
echo "Sesión cerrada correctamente.";
header("Location: index.html");
exit();
