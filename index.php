<?php

$ruta = $_GET['s'] ?? 'inicio';

$listaRutas = [
    'inicio' => [
        'titulo' => 'TiendaTech',
    ],
    'productos' => [
        'titulo' => 'Productos',
    ],
    'producto' => [
        'titulo' => 'Producto',
    ],
    'formulario' => [
        'titulo' => 'Contacto',
    ],
    'datos_alumno' => [
        'titulo' => 'Datos del alumno',
    ],
];

if (!isset($listaRutas[$ruta])) {
    $ruta = '404';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>

        <nav>

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?s=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?s=productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?s=formulario">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?s=datos_alumno">Datos de creador</a>
                </li>
            </ul>

        </nav>

    </header>

    <?php
    require __DIR__ . '/vistas/' . $ruta . '.php';
    ?>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2024 TiendaTech</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>

<?php
$datos = array();

?>