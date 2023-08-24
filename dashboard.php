<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body class="dashboard-body">
<?php include 'layouts/dashnav.php'; ?>
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Admin management |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administradores</a>
        </li>
      </ul>
      <span class="navbar-text">
        <strong><?php echo ucwords($_SESSION['usuario']." ");?></strong><a href="logout.php">Cerrar sesión</a>
      </span>
    </div>
  </div>
</nav> -->
<div class="card" style="width: 15rem;">
  <img src="images/icono-gestion-clientes.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php
        include('connection.php');
          $consul1 = "SELECT count(*) as total FROM users";
          $resul1 = mysqli_query($connection, $consul1) or die ("Algo salio mal");
          $row1 = mysqli_fetch_array($resul1);
          echo "<p class=card-text>Clientes: ".$row1['total']."</p>";
      ?>
    </div>
</div>
<div class="card" style="width: 15rem;">
  <img src="images/product.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php
        include('connection.php');
          $consul1 = "SELECT count(*) as total FROM productos";
          $resul1 = mysqli_query($connection, $consul1) or die ("Algo salio mal");
          $row1 = mysqli_fetch_array($resul1);
          echo "<p class=card-text>Productos: ".$row1['total']."</p>";
      ?>
    </div>
</div>
<div class="card" style="width: 15rem;">
  <img src="images/ventas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php
        include('connection.php');
          $consul1 = "SELECT COUNT(*) AS total FROM ventas WHERE status = 'pend'";
          $resul1 = mysqli_query($connection, $consul1) or die ("Algo salio mal");
          $row1 = mysqli_fetch_array($resul1);
          echo "<p class=card-text>Ventas: ".$row1['total']."</p>";
      ?>
    </div>
</div>
<div class="card" style="width: 15rem;">
  <img src="images/admins.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php
        include('connection.php');
          $consul1 = "SELECT count(*) as total FROM admin_users";
          $resul1 = mysqli_query($connection, $consul1) or die ("Algo salio mal");
          $row1 = mysqli_fetch_array($resul1);
          echo "<p class=card-text>Admins: ".$row1['total']."</p>";
      ?>
    </div>
</div>
</body>
</html>