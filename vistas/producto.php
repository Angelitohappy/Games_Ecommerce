<?php
require_once 'Classes/articulos.php';
$articulo = new Articulo;

// Suponiendo que estás pasando el ID del artículo a través de la URL
$id_producto = isset($_GET['id']) ? intval($_GET['id']) : 0;

$resultado = $articulo->obtenerArticulos();
foreach ($resultado as $articulo) {
    // Verificamos si el ID del artículo coincide con el ID solicitado
    if ($articulo['articulo_id'] == $id_producto) : ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $articulo['imagen']; ?>" class="img-fluid rounded-start" alt="<?php echo $articulo['imagen_descripcion']; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $articulo['titulo']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Categoría: <?php echo $articulo['categoria']; ?></h6>
                        <p class="card-text"><b>Precio:</b> <?php echo $articulo['precio']; ?></p>
                        <p class="card-text"><b>Cantidad:</b> <?php echo $articulo['cantidad']; ?></p>
                        <p class="card-text"><?php echo $articulo['descripcion']; ?></p>
                        <a href="index.php?s=producto&id=<?php echo $articulo['articulo_id']; ?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    endif;
}
?>