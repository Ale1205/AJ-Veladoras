<?php

session_start();

include 'connection.php';

$user = $_POST['user'];
$password_l = $_POST['password-l'];
$password_l = hash('sha512', $password_l);

$login_validate = mysqli_query($connection, "SELECT * FROM users WHERE username = '$user' AND password = '$password_l'");

if(mysqli_num_rows($login_validate) > 0){
    $row = $login_validate->fetch_assoc();
    $_SESSION['usuario'] = $row['name'];
	header("location: layouts-logedin/homeli.php");
    exit;
}else{
    echo '<script>
    alert ("Usuario no existe, favor de verificar credenciales");
    window.location = "login.php";
    </script>';
    exit;
}
?>


