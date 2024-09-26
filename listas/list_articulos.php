<?php
require_once __DIR__ . '/../classes/articulos.php';


function obtenerArticulos(): array
{
    $rutaAlArchivo = __DIR__ . '/../json/games.json';
    $registros = json_decode(file_get_contents($rutaAlArchivo), true);

    $salida = [];

    foreach ($registros as $registro) {
        $articulo = new Articulo;
        $articulo->articulo_id = $registro['articulo_id'];
        $articulo->titulo = $registro['titulo'];
        $articulo->descripcion = $registro['descripcion'];
        $articulo->precio = $registro['precio'];
        $articulo->imagen = $registro['imagen'];
        $articulo->imagen_descripcion = $registro['imagen_descripcion'];

        $salida[] = $articulo;
    }
    return $salida;
}
function obtenerArticulosPorId(int $id): Articulo
{
    $articulos = obtenerArticulos();

    foreach ($articulos as $articulo) {
        if ($articulo->articulo_id === $id) {
            return $articulo;
        }
    }
}
