<?php

require_once "conexion.php";

    Class Articulo {


        //Propiedades
        private $pdo;
        private $table = "products",
        

        //Contructor
        public function__contruct()
        {
            $db = new Nombre_bd();
            $this->pdo = $db;
        } 

        //Metodos

        public function obtenerTodos(){
            $consulta ? $this->pdo->prepare("SELECT * FROM " . $this->table);
        }

        $declaracion->execute();

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado



    }
        