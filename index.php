<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
      <h3>Formulario de Producto</h3>
      <form action="negocio/controlador/ProductoControlador.php" method="post">
         Nombre: <input type="text" name="nombre" id="nombre"><br>
         Descripcion: <input type="text" name="descripcion" id="descripcion"><br>
         Precio del Producto: <input type="text" name="precio" id="precio"><br>
         Fecha de Caducidad: <input type="date" name="fechaCaducidad" id="fechaCaducidad"><br>
         Stock: <input type="text" name="stock" id="stock"> <br>
         <input type="submit" value="Guardar" class="btn btn-outline-primary" name="guardar">
      </form>
<BR></BR>

<h3>Datos registrados!</h3>
<table border='1' cellpadding='0' cellspacing='0' width='1000' bgcolor='#F6F6F6' bordercolor='#FFFFFF' > 
    <tr> 
      <td width='30' style='font-weight: bold'>ID</td> 
      <td width='150' style='font-weight: bold'>NOMBRE</td> 
      <td width='150' style='font-weight: bold'>DESCRIPCION </td> 
      <td width='70' style='font-weight: bold'>PRECIO </td> 
      <td width='150' style='font-weight: bold'>FECHA CADUCIDAD</td> 
      <td width='80' style='font-weight: bold'>STOCK</td> 
      <td width='200' style='font-weight: bold'>ACCION</td> 
    </tr> 
    <?php
     //include 'TablaProducto.php';
     //mostrarTabla();
    ?>
</table> 
</body>
</html>