<?php
require_once 'Classes/articulos.php';

$articulo = new Articulo;

$articulosDB = $articulo->obtenerArticulos();
echo '<pre>';
print_r($articulosDB);
echo '</pre>';
