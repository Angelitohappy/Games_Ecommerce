<?php

  include 'acciones/conexion.php';

  $edit = $_GET["id"];

  $sql = $conexion->prepare("SELECT * FROM products WHERE articulo_id = ?");
  $sql -> execute([$edit]);
  
  $fila = $sql->fetch(PDO::FETCH_OBJ);
?>

<form action="acciones/editar.php" method="POST">
  <input type="Hidden" class="form-control"  name="Id" value="<?php echo $fila -> articulo_id ?>">
  <div class="mb-3">
    <label for="Categoria" class="form-label">Nombre de la categoria</label>
    <input type="text" class="form-control"  name="Categoria" value="<?php echo $fila -> categoria ?>">
  </div>
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombre del titulo</label>
    <input type="text" class="form-control" name="Nombre" value="<?php echo $fila -> titulo ?>">
  </div>
  <div class="mb-3">
    <label for="Descripcion" class="form-label">Descripcion del titulo</label>
    <input type="text" class="form-control"  name="Descripcion" value="<?php echo $fila -> descripcion ?>">
  </div>
  <div class="mb-3">
    <label for="Precio" class="form-label">Precio del producto</label>
    <input type="number" class="form-control"  name="Precio" value="<?php echo $fila -> precio?>">
  </div>
  <div class="mb-3">
    <label for="DescipcionImg" class="form-label">Descripcion de la imagen</label>
    <input type="text" class="form-control"  name="DescripcionImg" value="<?php echo $fila -> imagen_descripcion ?>">
  </div>
  <div class="mb-3">
    <label for="Cantidad" class="form-label">Cantidad del producto</label>
    <input type="number" class="form-control"  name="Cantidad" value="<?php echo $fila -> cantidad ?>">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>