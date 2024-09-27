<?php

class Articulo
{
    public int $articulo_id = 0;
    public string $titulo = "";
    public string $descripcion = "";
    public string $precio = "";
    public string $imagen = "";
    public string $imagen_descripcion = "";
}

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

        $articulos = obtenerArticulos();

        