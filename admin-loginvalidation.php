<?php

session_start();

include 'connection.php';

$email_l = $_POST['email-l'];
$password_l = $_POST['password-l'];
$password_l = hash('sha512', $password_l);

$login_validate = mysqli_query($connection, "SELECT * FROM admin_users WHERE email = '$email_l' AND password = '$password_l'");

if(mysqli_num_rows($login_validate) > 0){
    $row = $login_validate->fetch_assoc();
    $_SESSION['usuario'] = $row['first_name'];
    header("location: dashboard.php");
    exit;
}else{
    echo '<script>
    alert ("Usuario no existe, favor de verificar credenciales");
    window.location = "admin-login.php";
    </script>';
    exit;
}
?>