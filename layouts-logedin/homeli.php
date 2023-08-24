<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/AJ-logo-ico.png" type="image/x-icon">
    <title>AJ veladoras | Inicio</title>
</head>
<body class="home-body">
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php
        include 'navli.php';
    ?>
        <div class="carrusel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../images/aroma-neutro.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Vela neutra (sin aroma)</h5>
                        <p>No todo debe estar aromatizado. Ideal para alumbrar espacios oscuros</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="../images/aroma-relajante.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Vela aromatica relajante</h5>
                        <p>¿Dia estresante? Puedes relajarte con el aroma a lavanda</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="../images/pack.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Variedad de aromas</h5>
                        <p>Compra ahora la vela para cualquier ocasión explorando en el menú superior</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="div-1">
            <div class="div-2">
                <h3>Hola <?php echo ucwords($_SESSION['usuario']);?>! Bienvenido a AJveladoras</h3>
                <p>¡Bienvenidos a AJveladoras, tu destino para encontrar las velas
                     aromáticas perfectas que iluminarán y perfumarán tus espacios de manera única! En AJveladoras, 
                     entendemos la importancia de crear ambientes acogedores y relajantes, y nuestras velas aromáticas han sido 
                     diseñadas con esmero para brindarte una experiencia olfativa excepcional.</p>
                <h2>¡Siguenos!</h2>
                <a href=""><img class="social-ico" src="../images/FB.png" alt=""></a>
                <a href=""><img class="social-ico" src="../images/IG.png" alt=""></a>
                <a href=""><img class="social-ico" src="../images/YT.png" alt=""></a>
                <a href=""><img class="social-ico" src="../images/TT.png" alt=""></a>
            </div>
        </div>
    <footer>
        <p>
            © 2023 ajveladoras
        </p>
    </footer>
</body>
</html>