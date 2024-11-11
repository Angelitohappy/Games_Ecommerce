<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Categoria</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagen</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>

    <?php

require_once '../../Classes/articulos.php';
$articulo = new Articulo;

$resultado = $articulo->obtenerArticulos();

foreach ($resultado as $articulo):

    ?>

    <tr>
      <th scope="row"> <?php echo $articulo['articulo_id']; ?> </th>
      <td> <?php echo $articulo['categoria']; ?> </td>
      <td> <?php echo $articulo['titulo']; ?> </td>
      <td> <?php echo $articulo['descripcion']; ?> </td>
      <td> <?php echo $articulo['precio']; ?> </td>
      <td> <img style="width: 200px;" src="data:image/jpg;base64", <?php echo $articulo['imagen']; ?>  alt="<?php echo $articulo['imagen_descripcion']; ?> "> </td>
      <td> <?php echo $articulo['cantidad']; ?> </td>
      <td>
        <a href="" class="btn btn-warning">Editar</a>
        <a href="" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
<a href="Agregar_Productos.php" class="btn btn-success">Agregar articulo</a>

</div>
</body>
</html>
