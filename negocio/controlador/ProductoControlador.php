<?php

require_once '../crud/CrudProducto.php';
require_once '../modelo/Producto.php';

$crudProducto = new CrudProducto();
$producto = new Producto();

if(array_key_exists('guardar', $_POST)){
     $producto->__SET('nombre', $_POST['nombre']);
     $producto->__SET('descripcion', $_POST['descripcion']);
     $producto->__SET('precio', $_POST['precio']);
     $producto->__SET('stock', $_POST['stock']);
     $producto->__SET('fechaCaducidad', $_POST['fechaCaducidad']);
     $crudProducto->guardarProducto($producto);
   }
?>