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

require_once '../Classes/articulos.php';
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
        <a href="index.php?s=Editar_Productos&id=<?php echo $articulo['articulo_id']?>" class="btn btn-warning">Editar</a>
        <a href="" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
<a href="Agregar_Productos.php" class="btn btn-success">Agregar articulo</a>

</div>
