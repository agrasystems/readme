<?php 
class Book extends Database {
    public $codigoLibro;
    public $rating;
    public $nombre;
    public $descripcion;
    public $genero;
    public $fecha;
    public $costo;
    public $owned_by;
    public $expiration_date;

    public function __construct($libro){
        $this->codigoLibro = $libro['codigoLibro'];
        $this->rating = $libro['rating'];
        $this->nombre = $libro['nombre'];
        $this->descripcion = $libro['descripcion'];
        $this->genero = $libro['genero'];
        $this->fecha = $libro['fecha'];
        $this->costo = $libro['costo'];
        $this->owned_by = $libro['owned_by'];
        $this->expiration_date = $libro['expiration_date'];
    }

    public static function GetAllBooks(){
        $mbd = new Database();
		$ads=$mbd->prepare("SELECT * FROM libros");
		$ads->execute();
		$uInfo = $ads->fetchAll();
		return $uInfo;
    }

    public static function GetBooks(){
        $mbd = new Database();
		$ads=$mbd->prepare("SELECT * FROM libros");
		$ads->execute();
		return $ads->rowCount();
    }
}

?>