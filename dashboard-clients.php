<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Usuario id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Dirección</th>
      <th scope="col">Código postal</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <?php 
    include('connection.php');
    $consul = "SELECT * FROM users";
    $resul = mysqli_query($connection, $consul) or die ("Algo salio mal");
    while($column = mysqli_fetch_array($resul)){
    echo "<tbody>";
        echo "<tr>";
        echo "<th scope=row>".$column['user_id']."</th>";
        echo "<td>".$column['name']."</td>";
        echo "<td>".$column['lastname']."</td>";
        echo "<td>".$column['email']."</td>";
        echo "<td>".$column['address']."</td>";
        echo "<td>".$column['zip']."</td>";
        echo "<td>".$column['city']."</td>";
        echo "<td>".$column['state']."</td>";
        echo "</tr>";
    echo "</tbody>";
    }
  ?>
</table>
</body>
</html>