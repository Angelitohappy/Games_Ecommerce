    <?php

    $id = $_GET['id'] ?? FALSE;

    $game = Articulo::getArticulo_x_id($id);

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

    function obtenerArticulosPorId(int $id): ?Articulo
    {
        $articulos = obtenerArticulos();

        foreach ($articulos as $articulo) {
            if ($articulo->articulo_id === $id) {
                return $articulo;
            }
        }
        return null;
    }

    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $articulo = obtenerArticulosPorId($id);

        if ($articulo): ?>
            <div class="Juego_solo">
                <h2><?php echo $articulo->titulo; ?></h2>
                <img src="<?php echo $articulo->imagen; ?>" alt="<?php echo $articulo->imagen_descripcion; ?>">
                <p> <b> Precio: </b> <?php echo $articulo->precio; ?></p>
                <p><?php echo $articulo->descripcion; ?></p>
            </div>
        <?php else: ?>
            <p>Artículo no encontrado.</p>
    <?php endif;
    } else {
        echo "<p>No se ha especificado un ID de artículo.</p>";
    }
    ?>