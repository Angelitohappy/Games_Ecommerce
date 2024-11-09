<div class="juegos">
  <h2>  Juegos </h2>
</div>

<div id="productos">
        <?php
        require_once __DIR__ . '/../classes/articulos.php';   
        
        
        foreach ($articulos as $articulo): ?> 
        <div class="pastilla">
            <img src="<?php echo $articulo->imagen; ?>" alt="<?php echo $articulo->imagen_descripcion; ?>">
            <h3><?php echo $articulo->titulo; ?></h3>
            <p> <b> Precio: </b> <?php echo $articulo->precio; ?></p>
            <p><?php echo $articulo->descripcion; ?></p>
            <a href="index.php?s=producto&id=<?php echo $articulo->articulo_id; ?>" class="btn btn-primary">Ver más</a>
        </div>
    <?php endforeach; ?>

</div>

    