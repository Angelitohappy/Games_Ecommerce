<?php

require_once 'conexion.php';

class Articulo
{

    //Propiedades
    private $id;
    private $categoria;
    private $titulo;
    private $descripcion;
    private $precio;
    private $imagen;
    private $imagen_descripcion;
    private $cantidad;

    //Metodos
    public static function lista_completa(): array
    {
        $conexion = Conexion::getConexion();
        $query = "SELECT * FROM products";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return $lista;
    }

    /**
     * Devuelve los datos de un articulo en particular
     * @param int $id El ID único de los articulos 
     */
    public static function getArticulo_x_id(int $id): ?Articulo
    {
        $conexion = Conexion::getConexion();
        $query = "SELECT * FROM products WHERE id = $id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $result = $PDOStatement->fetch();

        return $result ? $result : null;
    }

    /**
     * Inserta un nuevo personaje a la base de datos
     * @param string $categoria
     * @param string $titulo
     * @param string $descripcion
     * @param float $precio
     * @param string $imagen
     * @param string $imagen_descripcion
     * @param int $cantidad
     */
    public static function insert(string $categoria, string $titulo, string $descripcion, float $precio, string $imagen, string $imagen_descripcion, int $cantidad)
    {
        $conexion = Conexion::getConexion();
        $query = "INSERT INTO personajes (`categoria`, `titulo`, `descripcion`, `precio`, `imagen`, `imagen_descripcion` `cantidad`) VALUES (:categoria, :titula, :descripcion, :precio, :imagen, :imagen_descripcion, :cantidad)";

        echo "El query es:" .     $query;

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [

                'categoria' => $categoria,
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'precio' => $precio,
                'imagen' => $imagen,
                'imagen_descripcion' => $imagen_descripcion,
                'cantidad' => $cantidad,

            ]
        );
    }

    public function edit($categoria, $titulo, $descripcion, $precio, $imagen, $imagen_descripcion, $cantidad)
    {

        $conexion = Conexion::getConexion();
        $query = "
        UPDATE personajes 
        SET categoria = :categoria, titulo = :titulo, descripcion= :descripcion, precio = :precio, imagen = :imagen, imagen_descripcion = :imagen_descripcion, cantidad = :cantidad
        WHERE id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'categoria' => $categoria,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'imagen' => $imagen,
            'imagen_descripcion' => $imagen_descripcion,
            'cantidad' => $cantidad,
            'id' => $this->id
        ]);
    }

    /**
     * Elimina esta instancia de la base de datos
     */
    public function delete()
    {
        $conexion = Conexion::getConexion();

        $query = "DELETE FROM products WHERE id = ?";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([$this->id]);
    }


    public function getId()
    {
        return $this->id;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPrice()
    {
        return $this->precio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getImagen_descripcion()
    {
        return $this->imagen_descripcion;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
}
