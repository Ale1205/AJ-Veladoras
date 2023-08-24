<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar venta</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<div class="adminlogindiv-1">
        <div class="adminlogindiv-2">
            <form action="dashboard-ventas-editbckp.php" method="post" name="">
                <h2>Editar status de venta</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="inputEmail4" name="id" placeholder="id venta">
                    </div>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option selected name="selected">Selecciona estatus</option>
                        <option value="pend" name="pend">pend</option>
                        <option value="comp" name="comp">comp</option>
                    </select>
                <button type="submit" class="btn btn-primary">Editar</button>
                <center><a class="cancel-btn"href="dashboard-ventas.php">Cancelar</a></center>
                <br>
            </form>
        </div>
    </div>
</body>
</html>