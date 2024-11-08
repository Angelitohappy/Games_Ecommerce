<?php
class Conexion
{
    private $host = 'localhost';
    private $usuario = 'root';
    private $contraseña = '';
    private $nombre_bd = 'game_ecommerce';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->usuario, $this->contraseña, $this->nombre_bd);
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function crearUsuario($nombre, $email)
    {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $nombre, $email);
        return $stmt->execute();
    }

    public function obtenerUsuarios()
    {
        $result = $this->conn->query("SELECT * FROM usuarios");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function actualizarUsuario($id, $nombre, $email)
    {
        $stmt = $this->conn->prepare("UPDATE usuarios SET nombre=?, email=? WHERE id=?");
        $stmt->bind_param("ssi", $nombre, $email, $id);
        return $stmt->execute();
    }

    public function eliminarUsuario($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}


require 'conexion.php';

$conexion = new Conexion();

// Crear usuario
if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $conexion->crearUsuario($nombre, $email);
}

// Leer usuarios
$usuarios = $conexion->obtenerUsuarios();

// Actualizar usuario
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $conexion->actualizarUsuario($id, $nombre, $email);
}

// Eliminar usuario
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $conexion->eliminarUsuario($id);
}
