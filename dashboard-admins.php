<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<a href="newadminregister.php"><button type="button" class="btn btn-primary">Agregar</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Rol</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <?php 
    include('connection.php');
    $consul = "SELECT * FROM admin_users";
    $resul = mysqli_query($connection, $consul) or die ("Algo salio mal");
    while($column = mysqli_fetch_array($resul)){
    echo "<tbody>";
        echo "<tr>";
        echo "<th scope=row>".$column['id']."</th>";
        echo "<td>".$column['first_name']."</td>";
        echo "<td>".$column['last_name']."</td>";
        echo "<td>".$column['rol']."</td>";
        echo "<td>".$column['email']."</td>";
        echo "</tr>";
    echo "</tbody>";
    }
  ?>
</table>
    
</body>
</html>