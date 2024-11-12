<?php
require 'Database.php';

class Auth
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $fila['password'])) {
                $_SESSION['usuario'] = $username;
                $_SESSION['role'] = $fila['role']; // Guardar el rol en la sesión
                return true;
            }
        }
        return false;
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['usuario']);
    }

    public function isAdmin()
    {
        return isset($_SESSION['role']) && $_SESSION['role'] === 'admin'; // Verificar si es admin
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
    }
}
