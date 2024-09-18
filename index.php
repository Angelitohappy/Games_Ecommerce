<?php

$ruta = $_GET['s'] ?? 'home';

$listaRutas = [
    'home' => [
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>

    <header>

        <nav>

            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

        </nav>

    </header>

    <?php
        require __DIR__ . '/vistas/' . $ruta . '.php';
    ?>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 TiendaTech</p>
    </footer>
    
</body>
</html>
