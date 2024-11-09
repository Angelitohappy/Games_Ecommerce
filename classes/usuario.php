<?php

public function crearUsuario($email, $contraseña, $nombre)
    {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (email, password, name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $contraseña, $nombre);
        return $stmt->execute();
    }

    public function obtenerUsuarios()
    {
        $result = $this->conn->query("SELECT * FROM usuarios");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validarUsuario($email, $contraseña)
    {
        $stmt = $this->conn->prepare("SELECT password FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($contraseña_hash);
        $stmt->fetch();

        $stmt = $this->conn->prepare("SELECT email FROM users WHERE password=?");
        $stmt->bind_param("s", $contraseña);
        $stmt->execute();
        $stmt->bind_result($user_email);
        $stmt->fetch();

        if ($contraseña_hash && password_verify($contraseña, $contraseña_hash) && $user_email) {
            return true; // Usuario validado
        } else {
            return false; // Validación fallida
        }
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

$conexion = new Conexion();


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
