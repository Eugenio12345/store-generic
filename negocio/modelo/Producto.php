<?php

class Producto{
     
    private $id_producto;
	private $nombre;
	private $descripcion;
	private $precio;
    private $stock;
    private $fechaCaducidad;
    
    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }

   }
?>