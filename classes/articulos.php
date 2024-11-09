<?php

require_once 'conexion.php';

    Class Articulo {


        //Propiedades
        private $pdo;
        private $table = "products";
        

        //Contructor
        public function __contruct()
        {
            $db = new Database();
            $this->pdo = $db->getConnection();
        } 

        //Metodos

        public function obtenerTodos(){
            $consulta = $this->pdo->prepare("SELECT * FROM " . $this->table);

            $consulta->execute();

            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }

    }
        