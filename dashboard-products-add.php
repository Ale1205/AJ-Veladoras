<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
</head>
<body>
<?php include 'layouts/dashnav.php'; ?>
<div class="adminlogindiv-1">
        <div class="adminlogindiv-2">
            <form action="dashboard-products-addbckp.php" method="post" name="">
                <h2>Agregar nuevo producto</h2>
                <div class="row g-3">
                <div class="col-md-6">
                        <label for="id" class="form-label">Id</label>
                        <input type="number" class="form-control" id="inputEmail4" name="id">
                    </div>
                    <div class="col-md-6">
                        <label for="item" class="form-label">Articulo</label>
                        <input type="text" class="form-control" id="inputEmail4" name="item_name">
                    </div>
                    <div class="col-md-6">
                        <label for="odor" class="form-label">Aroma</label>
                        <input type="text" class="form-control" id="inputEmail4" name="item_odor">
                    </div>
                    <div class="col-md-6">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="inputEmail4" name="item_type">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="inputPassword4" name="price">
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea type="text" class="form-control" id="inputEmail4" name="description"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="inputEmail4" name="stock">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <br>
                <button type="submit" class="btn btn-primary">Agregar</button>
                <center><a class="cancel-btn"href="dashboard-products.php">Cancelar</a></center>
                <br>
            </form>
        </div>
    </div>
</body>
</html>