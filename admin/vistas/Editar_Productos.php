
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