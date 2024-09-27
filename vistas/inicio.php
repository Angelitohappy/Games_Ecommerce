<main>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagenes/bioshock_infinite_carusel.png" class="d-block w-100" alt="Imagen de Bioschock infinite">
    </div>
    <div class="carousel-item">
      <img src="Imagenes/Red_dead_II.png" class="d-block w-100" alt="Imagen de Red dead 2">
    </div>
    <div class="carousel-item">
    <img src="Imagenes/Eldel-ring.png" class="d-block w-100" alt="Imagen de Eldel ring">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="contenedeor_articulos">

<?php
        require_once __DIR__ . '/../classes/articulos.php';

foreach ($articulos as $articulo): ?> 
        <div class="pastilla">
            <img src="<?php echo $articulo->imagen; ?>" alt="<?php echo $articulo->imagen_descripcion; ?>">
            <h3><?php echo $articulo->titulo; ?></h3>
            <p>Precio: <?php echo $articulo->precio; ?></p>
            <p><?php echo $articulo->descripcion; ?></p>
            <a href="index.php?s=producto&id=<?php echo $articulo->articulo_id; ?>" class="btn btn-primary">Ver más</a>
        </div>
    <?php endforeach; ?>

<div>

<main>