<?php

require_once "classes/articulos.php";

$articulo = new Articulo;

$articulosBD = $articulo->obtenerTodos();

echo "<pre>";
print_r($articulosBD);
echo "</pre>";
    