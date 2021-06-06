<?php

class Conexion{

    private $pdo;

    function conectarDB(){
        try
		{
			$this->pdo = new PDO('mysql:host=192.168.0.105;dbname=store_database', 'merino', 'root');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
        }
         return $this->pdo;
      }
   }

?>