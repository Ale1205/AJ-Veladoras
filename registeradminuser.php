<?php
include 'connection.php';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$rol = $_POST['rol'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$insert = "INSERT INTO admin_users (id,first_name,last_name,rol,email,password) VALUES ('$id','$first_name','$last_name','$rol','$email','$password')";

$email_verify = mysqli_query($connection, "SELECT * FROM admin_users WHERE email = '$email' ");
if(mysqli_num_rows($email_verify) > 0){
    echo '<script>
    alert ("Este correo ya está registrado");
    window.location = "newadminregister.php";
    </script>';
    exit();
}

$resul = mysqli_query($connection,$insert);
if(!$resul){
    echo '<script>
    alert ("Wrong data or access denied");
    window.location = "newadminregister.php";
    </script>';

}else{
    echo '<script>
    alert ("Nuevo administrador registrado!");
    window.location = "dashboard-admins.php";
    </script>';
}


mysqli_close($conexion);
?>