<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/AJ-logo-ico.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="home-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="images/AJ-logo.png" alt="" class="nav-imagelogo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Acerca de nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Veladoras
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="aromatic.php">Velas aromáticas</a></li>
                        <li><a class="dropdown-item" href="neutre.php">Velas neutras</a></li>
                        <li><a class="dropdown-item" href="menu-all.php">Todas las velas</a></li>
                    </ul>
                </li>
                <script>
                    function enable(){
                        input_1 = document.getElementById("input1").value;
                        val = 0;

                        if(input_1 == ""){
                            val ++;
                        }
                        if(val == 0){
                            document.getElementById("btn-search").disabled = false;
                        }else{
                            document.getElementById("btn-search").disabled = true;
                        }
                    }
                    document.getElementById("input1"),addEventListener("keyup", enable);
                </script>
                <form class="d-flex" role="search" action="results.php" method="POST">
                    <input id="input1" class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search" name="db_search">
                    <button id="btn-search" disabled class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registrarte</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>