<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        .pastilla {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin: 10px;
            text-align: center;
            display: inline-block;
            width: 200px;
        }

        .pastilla img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div id="productos">
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

        // Obtener artículos y mostrarlos
        $articulos = obtenerArticulos();
        foreach ($articulos as $articulo): ?>
            <div class="pastilla">
                <img src="<?php echo $articulo->imagen; ?>" alt="<?php echo $articulo->imagen_descripcion; ?>">
                <h3><?php echo $articulo->titulo; ?></h3>
                <p>Precio: <?php echo $articulo->precio; ?></p>
                <p><?php echo $articulo->descripcion; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>