<?php

include '../conexion/conexion.php';
include '../modelo/Producto.php';

class CrudProducto{
    
    private $pdo;
    private $conexion;

    public function __CONSTRUCT()
	{
		$this->conexion = new Conexion();
        $this->pdo = $this->conexion->conectarDB();
    }
    
    
    public function guardarProducto(Producto $product){
        try 
		{
		$sql = "INSERT INTO producto (nombre,descripcion,precio,stock,fechaCaducidad) 
                VALUES (?, ?, ?, ?,?)";
        
		$this->pdo->prepare($sql)
		    ->execute(
			array(
                $product->__GET('nombre'),
                $product->__GET('descripcion'), 
                $product->__GET('precio'), 
                $product->__GET('stock'), 
                $product->__GET('fechaCaducidad') 
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
     
    public function editarProducto(Producto $producto){
        try{
          $sql = "UPDATE productO SET nombre = ?, descripcion = ?, stock = ?, fechaCaducidad = ?, precio = ? WHERE id_producto = ?";
          $this->pdo->prepare($sql)
		    ->execute(
			array(
                $producto->__GET('nombre'),
                $producto->__GET('descripcion'), 
                $producto->__GET('stock'), 
                $producto->__GET('fechaCaducidad'),
                $producto->__GET('precio'), 
                $producto ->__GET('id_producto') 
				)
			);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
    
    public function obtenerPorId($id_producto){
        
    }
 }

?>