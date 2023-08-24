
<?php
$connection = mysqli_connect("localhost", "root", "", "ajveladoras");
$connection -> set_charset("utf8");

session_start();


if ($connection->connect_error) {
    die("Error de conexion a la base de datos: " . $connection->connect_error);
}

//Regiter 

// Procesar el formulario de registro cuando se env�a
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $password = hash('sha512', $password);
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $state = $_POST['state'];



    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT id FROM users WHERE user = '$user'";
    $result = $connection->query($sql);

    $sql2 = "SELECT id FROM users WHERE email = '$email'";
    $result2 = $connection->query($sql2);

    if ($result ->num_rows >0) {
        // El usuario ya existe
        $error = "El usuario ya esta registrado. Por favor, elige otro nombre de usuario.";
        
    }if ($result2 ->num_rows >0) {
        //El email ya existe
        $error = "El email ya esta registrado";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO users (username, name, lastname, email, password, address, zip, city, state) VALUES ('$user', '$name', '$lastname', '$email', '$password','$address','$zip','$city','$state')";
        if ($connection->query($sql) === TRUE) {
            // Registro exitoso, redirigir al usuario a la p�gina de inicio de sesi�n
            header("Location: login.php");
            exit;
        } else {
            // Error al insertar en la base de datos
            $error = "Error al registrar al usuario. Intantalo nuevamente.";
        }
    }
}


$connection->close();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/styles2.css">
	    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
		
	</head>

	<body class="bodyr">

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>


		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/velas3.jpg" alt="">
				</div>
				<form method="post" action="">
					<h3>Registro</h3>
					<div class="form-group">
						<input type="text" id="nombre" name="name" required placeholder="Nombre" class="form-control">
						<input type="text" id="apellido" name="lastname" required placeholder="Apellido" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" id="email" name="email" required placeholder="Correo" class="form-control">
						<input type="text" id="usuario" name="user" required placeholder="Usuario" class="form-control">
						
						
					</div>
					<div class="form-wrapper">
						<input type="password" id="contrasena" name="password" required placeholder="Contraseña" class="form-control">
						
					</div>
					<div class="form-group">
						<input type="text" id="address" name="address" required placeholder="Direccion" class="form-control">
						<input type="number" id="zip" name="zip" required placeholder="Codigo Postal" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" id="city" name="city" required placeholder="Ciudad" class="form-control">
						<input type="text" id="state" name="state" required placeholder="Estado" class="form-control">
					
					</div>
					
					
					<button>Registrar</button>
                    <br>
                    <a href="home.php">Cancelar</a>

                    
				</form>
			</div>
		</div>
		
	</body>
</html>
