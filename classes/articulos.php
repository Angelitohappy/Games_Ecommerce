<?php

require_once 'conexion.php';

class Articulo
{

    //Propiedades
    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $cantidad;
    private $imagen;


        //Propiedades
        private $pdo;
        private $table = "products";
        

        //Contructor
        public function __contruct()
        {
            $db = new Database();
            $this->pdo = $db->getConnection();
        } 

        //Metodos

        public function obtenerTodos(){
            $consulta = $this->pdo->prepare("SELECT * FROM " . $this->table);

            $consulta->execute();

            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }

    /**
     * Devuelve el listado completo de los articulos en sistema
     */
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
     * @param string $nombre
     * @param string $categoria
     * @param float $precio 
     * @param int $cantidad
     * @param string $imagen ruta a un archivo .jpg o .png 
     */
    public static function insert(string $nombre, string $categoria, float $precio, int $cantidad,  string $imagen)
    {
        $conexion = Conexion::getConexion();
        $query = "INSERT INTO personajes (`nombre`, `categoria`, `precio`, `cantidad`, `imagen`) VALUES (:nombre, :categoria, :precio, :cantidad, :imagen)";

        echo "El query es:" .     $query;

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                'nombre' => $nombre,
                'categoria' => $categoria,
                'precio' => $precio,
                'cantidad' => $cantidad,
                'imagen' => $imagen
            ]
        );
    }


    /**
     * Edita un Articulo en base de datos
     * @param string $nombre
     * @param string $categoria
     * @param float $precio 
     * @param int $cantidad
     * @param string $imagen ruta a un archivo .jpg o .png 
     */
    public function edit($nombre, $categoria, $precio, $cantidad, $imagen)
    {

        $conexion = Conexion::getConexion();
        $query = "
        UPDATE personajes 
        SET nombre = :nombre, categoria = :categoria, precio = :precio, cantidad = :cantidad, imagen = :imagen 
        WHERE id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'nombre' => $nombre,
            'categoria' => $categoria,
            'precio' => $precio,
            'cantidad' => $cantidad,
            'imagen' => $imagen,
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

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of historia
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Get the value of historia
     */
    public function getPrice()
    {
        return $this->precio;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getImagen()
    {
        return $this->imagen;
    }
}
