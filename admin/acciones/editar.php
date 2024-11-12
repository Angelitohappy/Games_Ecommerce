<?php

    include 'conexion.php';

    $id = $_POST["Id"];
    $categoria = $_POST['Categoria'];
    $nombre = $_POST['Nombre'];
    $descripcion = $_POST['Descripcion'];
    $precio = $_POST['Precio'];
    $descripcionImg = $_POST['DescripcionImg'];
    $cantidad = $_POST['Cantidad'];

    $sentencia = $conexion->prepare("UPDATE products SET categoria = ?, titulo = ?, descripcion = ?, precio = ?, imagen_descripcion = ?, cantidad = ? WHERE articulo_id = ?");

    $resultado = $sentencia->execute([$categoria, $nombre, $descripcion, $precio, $descripcionImg, $cantidad, $id]);

    if ($resultado === TRUE) {
        header('location: ../vistas/datos.php');
    } else {
        echo "Algo salio mal";
    }

?>