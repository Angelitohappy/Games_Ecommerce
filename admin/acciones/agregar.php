<?php

include 'conexion.php';


// $ArticuloCategoria = $_POST['Categoria'];
// $ArticuloNombre = $_POST['Nombre'];
// $ArticuloDescripcion = $_POST['Descripcion'];
// $ArticuloImgDescripcion = $_POST['DescipcionImg'];
// $ArticuloCantidad = $_POST['Cantidad'];

// $sql = "INSERT INTO products (categoria, titulo, descripcion, precio, imagen_descripcion, cantidad) VALUE ('$ArticuloCategoria, $ArticuloNombre, $ArticuloDescripcion, $ArticuloImgDescripcion, $ArticuloCantidad')";

// $resultado = $conexion -> query($sql);

// if ($resultado) {
//     header('Location: index.php');
// } else {
//     echo "No funciona"; 
// }

if($_SERVER['REQUEST_METHOD'] === "POST")

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

    if ($resultado->execute()){
        header('location: ../vistas/Datos_Productos.php');
    } else {
        echo "error";
    }

?>