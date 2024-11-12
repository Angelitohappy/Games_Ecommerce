<?php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $categoria = $_POST['Categoria'];
    $nombre = $_POST['Nombre'];
    $precio = $_POST['Precio'];
    $descripcion = $_POST['Descripcion'];
    $descripcionImg = $_POST['DescipcionImg'];
    $cantidad = $_POST['Cantidad'];

    $resultado = $conexion->prepare("INSERT INTO products (categoria, titulo, precio, descripcion, imagen_descripcion, cantidad) VALUE (:Categoria, :Nombre, :Precio, :Descripcion, :DescripcionImg, :Cantidad)");

    $resultado->bindParam(":Categoria", $categoria);
    $resultado->bindParam(":Nombre", $nombre);
    $resultado->bindParam(":Precio", $precio);
    $resultado->bindParam(":Descripcion", $descripcion);
    $resultado->bindParam(":DescripcionImg", $descripcionImg);
    $resultado->bindParam(":Cantidad", $cantidad);

    if ($resultado->execute()) {
        header('location: ../vistas/datos.php');
    } else {
        echo "error";
    }
}
