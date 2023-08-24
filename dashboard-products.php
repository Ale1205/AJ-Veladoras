<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<!-- <button type="submit" class="btn btn-danger">Eliminar</button>
<button type="button" class="btn btn-secondary">Editar</button> -->
<a href="dashboard-products-add.php"><button type="button" class="btn btn-primary">Agregar</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Producto id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Aroma</th>
      <th scope="col">Tipo</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripción</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <?php 
    include('connection.php');
    $consul = "SELECT * FROM productos";
    $resul = mysqli_query($connection, $consul) or die ("Algo salio mal");
    while($column = mysqli_fetch_array($resul)){
    echo "<tbody>";
        echo "<tr>";
        echo "<th scope=row>".$column['id']."</th>";
        echo "<td>".$column['item_name']."</td>";
        echo "<td>".$column['item_odor']."</td>";
        echo "<td>".$column['item_type']."</td>";
        echo "<td>".$column['price']."</td>";
        echo "<td>".$column['description']."</td>";
        echo "<td>".$column['stock']."</td>";
        echo "</tr>";
    echo "</tbody>";
    }
  ?>
</table>
</body>
</html>