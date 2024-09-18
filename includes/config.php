<?php

// Definir la ruta base del proyecto
if (!defined('BASE_PATH')) {
    define('BASE_PATH', realpath(dirname(__FILE__) . '/..') . '/');
}

if (!defined('BASE_URL')) {
    define('BASE_URL', 'C:/Users/LENOVO/Documents/Personal/Universidad Juan Pablo/TP PHP/TiendaTechCompleto/TiendaTech - Clases/');
}

// Incluir el archivo de la base de datos usando la ruta absoluta
require_once BASE_PATH . 'clases/Database.php';

$db = "";
$pdo = "";

?>