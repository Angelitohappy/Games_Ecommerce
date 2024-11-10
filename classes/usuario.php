<?php
class usuario
{

    private $id;
    private $email;
    private $nombre_usuario;
    private $nombre_completo;
    private $password;
    private $rol;

    /**
     * Encuentra un usuario por su Username
     * @param string $username El nombre de usuario
     */
    public static function usuario_x_username(string $username): ?Usuario
    {
        $conexion = Conexion::getConexion();
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = ?";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute([$username]);

        $result = $PDOStatement->fetch();

        if (!$result) {
            return null;
        }
        return $result;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nombre_usuario
     */
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Set the value of nombre_usuario
     *
     * @return  self
     */
    public function setNombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    /**
     * Get the value of nombre_completo
     */
    public function getNombre_completo()
    {
        return $this->nombre_completo;
    }

    /**
     * Set the value of nombre_completo
     *
     * @return  self
     */
    public function setNombre_completo($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
}

// public function crearUsuario($email, $contraseña, $nombre)
// {
//     $stmt = $this->conn->prepare("INSERT INTO usuarios (email, password, name) VALUES (?, ?, ?)");
//     $stmt->bind_param("sss", $email, $contraseña, $nombre);
//     return $stmt->execute();
// }

// public function obtenerUsuarios()
// {
//     $result = $this->conn->query("SELECT * FROM usuarios");
//     return $result->fetch_all(MYSQLI_ASSOC);
// }

// public function validarUsuario($email, $contraseña)
// {
//     $stmt = $this->conn->prepare("SELECT password FROM users WHERE email=?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $stmt->bind_result($contraseña_hash);
//     $stmt->fetch();

//     $stmt = $this->conn->prepare("SELECT email FROM users WHERE password=?");
//     $stmt->bind_param("s", $contraseña);
//     $stmt->execute();
//     $stmt->bind_result($user_email);
//     $stmt->fetch();

//     if ($contraseña_hash && password_verify($contraseña, $contraseña_hash) && $user_email) {
//         return true; // Usuario validado
//     } else {
//         return false; // Validación fallida
//     }
// }

// public function actualizarUsuario($id, $nombre, $email)
// {
//     $stmt = $this->conn->prepare("UPDATE usuarios SET nombre=?, email=? WHERE id=?");
//     $stmt->bind_param("ssi", $nombre, $email, $id);
//     return $stmt->execute();
// }

// public function eliminarUsuario($id)
// {
//     $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id=?");
//     $stmt->bind_param("i", $id);
//     return $stmt->execute();
// }

// public function __destruct()
// {
//     $this->conn->close();
// }


// $conexion = new Conexion();


// // Leer usuarios
// $usuarios = $conexion->obtenerUsuarios();

// // Actualizar usuario
// if (isset($_POST['actualizar'])) {
//     $id = $_POST['id'];
//     $nombre = $_POST['nombre'];
//     $email = $_POST['email'];
//     $conexion->actualizarUsuario($id, $nombre, $email);
// }

// // Eliminar usuario
// if (isset($_GET['eliminar'])) {
//     $id = $_GET['eliminar'];
//     $conexion->eliminarUsuario($id);
// }
