<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<div class="container">

<form action="../acciones/agregar.php" method="POST">
  <div class="mb-3">
    <label for="Categoria" class="form-label">Nombre de la categoria</label>
    <input type="text" class="form-control"  name="Categoria">
  </div>
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombre del titulo</label>
    <input type="text" class="form-control" name="Nombre">
  </div>
  <div class="mb-3">
    <label for="Precio" class="form-label">Precio del producto</label>
    <input type="number" class="form-control"  name="Precio">
  </div>
  <div class="mb-3">
    <label for="Descripcion" class="form-label">Descripcion del titulo</label>
    <input type="text" class="form-control"  name="Descripcion">
  </div>
  <div class="mb-3">
    <label for="DescipcionImg" class="form-label">Descripcion de la imagen</label>
    <input type="text" class="form-control"  name="DescipcionImg">
  </div>
  <div class="mb-3">
    <label for="Cantidad" class="form-label">Cantidad del producto</label>
    <input type="number" class="form-control"  name="Cantidad">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


</div>


</body>
</html>