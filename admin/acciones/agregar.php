<?php

include 'conexion.php';


$ArticuloCategoria = $_POST("Categoria");
$ArticuloNombre = $_POST("Nombre");
$ArticuloDescripcion = $_POST("Descripcion");
$ArticuloImgDescripcion = $_POST("DescipcionImg");
$ArticuloCantidad = $_POST("Cantidad");

$sql = "INSERT INTO products (categoria, titulo, descripcion, precio, imagen_descripcion, cantidad) VALUE ($ArticuloCategoria, $ArticuloNombre, $ArticuloDescripcion, $ArticuloImgDescripcion, $ArticuloCantidad')";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header('Location: index.php');
} else {
    echo "No funciona";
}

?>