<?php
include 'connection.php';

$id = $_POST['id'];
$item_name = $_POST['item_name'];
$item_odor = $_POST['item_odor'];
$item_type = $_POST['item_type'];
$price = $_POST['price'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$image = $_POST['image'];

$insert = "INSERT INTO productos (id,item_name,item_odor,item_type,price,description,stock,image) VALUES 
('$id','$item_name','$item_odor','$item_type','$price','$description','$stock','$image')";

$id_verify = mysqli_query($connection, "SELECT * FROM productos WHERE id = '$id' ");
if(mysqli_num_rows($id_verify) > 0){
    echo '<script>
    alert ("Este articulo ya está registrado");
    window.location = "dashboard-products-add.php";
    </script>';
    exit();
}

$resul = mysqli_query($connection,$insert);
if(!$resul){
    echo '<script>
    alert ("Hubo un error");
    window.location = "dashboard-products-add.php";
    </script>';

}else{
    echo '<script>
    alert ("Articulo agregado con exito!");
    window.location = "dashboard-products-add.php";
    </script>';
}


mysqli_close($conexion);
?>