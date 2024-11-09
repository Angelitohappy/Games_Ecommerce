<?php

class Conexion
{

    //Propiedades
    private const host = 'localhost';
    private const usuario = 'root';
    private const contraseña = '';
    private const nombre_bd = 'game_ecommerce';
    private const enlace = 'mysql:host=' . self::host . '
    ; dbname=' . self::nombre_bd . ';charset=utf8mb4';

    private static ?PDO $db = null;

    public static function conectar()
    {

        try {
            self::$db = new PDO(self::enlace, self::usuario, self::contraseña);
            // echo "<p>Acabo de crear una conexion para poder traer datos! =D</p>";
        } catch (Exception $e) {
            die('Error al conectar con MySQL.');
        }
    }

    /**
     * Función que devuelve una conexión PDO lista para usar
     * @return PDO
     */
    public static function getConexion(): PDO
    {
        if (self::$db === null) {
            self::conectar();
        }
        return self::$db;
    }
}
