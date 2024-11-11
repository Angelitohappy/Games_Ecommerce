<?php

class Conexion
{

    //Propiedades
    private static ?PDO $db = null;
    //Contructor

    public static function conectar()
    {

        try {
            self::$db = new PDO('mysql:host=localhost; dbname=game_commerce', 'root', '');
            echo ("TODO OK");
        } catch (PDOException $error) {
            die("Error de conexion" . $error->getMessage());
        }
    }

    //metodos
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
