<?php

$ruta = $_GET['s'] ?? 'dashboard';

$listaRutas = [
    'dashboard' => [
        'titulo' => 'TiendaTech',
    ],
    'datos' => [
        'titulo' => 'Productos',
    ],
    'agregar' => [
        'titulo' => 'Agregar',
    ],
    'editar' => [
        'titulo' => 'Editar',
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

        <nav class="navegador">

            <ul class="bg-dark nav justify-content-end">
                <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="index.php?s=TiendaTech">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="index.php?s=datos">Productos</a>
                </li>
            </ul>

        </nav>

    </header>

    <?php
        require __DIR__ . '/vistas/' . $ruta . '.php';
    ?>

    <footer class="bg-dark text-white text-center py-3 mt-4 position-static">
        <p>&copy; 2024 TiendaTech</p>
    </footer>

</body>

</html>