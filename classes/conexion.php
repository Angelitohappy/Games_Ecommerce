<?php

class Database
{

    //Propiedades
    private $enlace;

    //Contructor

    public function __construct()
    {

        try {
            $this->enlace = new PDO("mysql:host=localhost;dbname=game_ecommerce", 'root', '');
            $this->enlace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die("Error de conexion" . $error->getMessage());
        }
    }

    //metodos

    

    public function getConnection()
    {
        return $this->enlace;
    }
}
