<?php

include('connection.php');

$id_venta = $_POST['id'];
$newvalue = $_POST['status'];


$change = "UPDATE ventas SET status = '$newvalue' WHERE id_venta = '$id_venta'";

$result = mysqli_query($connection,$change);
if($result){
    echo '<script>
    alert ("Articulo actualizado");
    window.location = "dashboard-ventas.php";
    </script>';

}else{
    echo '<script>
    alert ("Hubo un error");
    window.location = "dashboard-ventas-edit.php";
    </script>';
}


mysqli_close($conexion);





?>