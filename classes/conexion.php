<?php

class Conexion {

    //Propiedades
    private $servername = 'localhost';
    private $usuario = 'root';
    private $password = '';
    private $nombre_bd = 'game_ecommerce';
    private $sport = 3306;
    private $enlace;

    //Contructor

    public function __construct() {
        
        try {
            $this->enlace = new PDO("mysql:host=$this->$servername;dbname=$this->$nombre_bd", $this->$usuario, $this->$password);
            $this->enlace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("TODO OK");
        } catch (PDOException $error) {
            die("Error de conexion" . $error->getMessage());
        }
    }

    //metodos

    public function getConnection(){
        return $this->enlace;
    }
}
