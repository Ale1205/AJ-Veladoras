<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<a href="dashboard-ventas-edit.php"><button type="button" class="btn btn-secondary">Editar</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Venta id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cliente id</th>
      <th scope="col">Producto id</th>
      <th scope="col">Nombre articulo</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <?php 
    include('connection.php');
    $consul = "SELECT * FROM ventas";
    $resul = mysqli_query($connection, $consul) or die ("Algo salio mal");
    while($column = mysqli_fetch_array($resul)){
    echo "<tbody>";
        echo "<tr>";
        echo "<th scope=row>".$column['id_venta']."</th>";
        echo "<td>".$column['date']."</td>";
        echo "<td>".$column['user_id']."</td>";
        echo "<td>".$column['id_producto']."</td>";
        echo "<td>".$column['item_name']."</td>";
        echo "<td>".$column['price']."</td>";
        echo "<td>".$column['qty']."</td>";
        echo "<td>".$column['status']."</td>";
        echo "</tr>";
    echo "</tbody>";
    }
  ?>
</table>
</body>
</html>