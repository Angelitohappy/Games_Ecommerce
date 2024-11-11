<?php

require_once 'conexion.php';

class Articulo
{

    //Propiedades
    private $pdo;
    private $table = "products";

    //constructor
    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    //Metodos

    public function vista_productos() {
        require '../vistas/productos.php';
    }

    public function obtenerArticulos()
    {
        $consulta = $this->pdo->prepare("SELECT * FROM " . $this->table);
        $consulta->execute();

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
}
