<?php
class Producto {
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;

    public function __construct($id, $nombre, $precio, $cantidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

}



class BaseDeDatos {
    private $conexion;

    public function conectar($servername, $username, $password, $database) {
        try {
            $dsn = "mysql:host=$servername;dbname=$database";
            $this->conexion = new PDO($dsn, $username, $password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

   
}

// Métodos para obtener los valores de las propiedades

public function getId() {
    return $this->id;
}

public function getNombre() {
    return $this->nombre;
}

public function getPrecio() {
    return $this->precio;
}

public function getCantidad() {
    return $this->cantidad;
}

// Métodos para establecer los valores de las propiedades

public function setId($id) {
    $this->id = $id;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}

public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
}


?>

