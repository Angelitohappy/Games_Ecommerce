<?php

class Conexion {

    //Propiedades
    private $host = 'localhost';
    private $usuario = 'root';
    private $contraseña = '';
    private $nombre_bd = 'game_ecommerce';
    private $enlace;

    //Contructor

    public function __construct() {
        
        try {
            $this->enlace = new PDO("mysql:host=$this->$host;dbname=this->$nombre_bd", $this->$usuario, $this->$contraseña);
            $this->enlace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("TODO OK");
        } catch (PDOException $error) {
            die("Error de conexion" . $error->getMessage());
        }
    }

    //metodos

    public function getConnection(){
        return $this->pdo;
    }
}
