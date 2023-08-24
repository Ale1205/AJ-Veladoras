<?php
session_start();
if(isset($_SESSION['usuario'])){
	header("location: layouts-logedin/homeli.php");
}

// Configuración de Google OAuth
$client_id = '219558993868-c5f0hgog118hnmv1pa0oj924qffsk2ke.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = 'http://localhost/ajveladoras-main/home.php';

// URL de inicio de sesión con Google
$auth_url = 'https://accounts.google.com/o/oauth2/auth';
$params = array(
    'response_type' => 'code',
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
    'access_type' => 'online',
);

$auth_link = $auth_url . '?' . http_build_query($params);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles3.css">
	<link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <title>Login</title>
</head>
<body class="bodylogRe">

<?php //if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post" action="login-validate.php">
<div class="login-wrap r">
	<div class="login-html">
	<h2 class="h2sing-in-up">Login</h2>
	<br>
		<div class="login-form">
				<div class="group">
					<label for="usuario" class="label">Username</label>
					<input type="text" id="usuario" name="user" required class="input">
				</div>
				<div class="group">
					<label for="contrasena" class="label">Password</label>
					<input type="password" id="contrasena" name="password-l" required class="input" >
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sing In">
				</div>
				<div class="foot-lnk">
					<a href="register.php">Singup</a>
				</div><br>
				<div class="foot-lnk">
					<a href="<?php echo $auth_link; ?>"><img src="images/google.png" alt=""></a>
					<a href=""><img src="images/facebook.png" alt=""></a>
				</div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
				<center><a href="home.php">Cancelar</a></center>
		</div>
	</div>
</div>
</form>

</body>
</html>
