
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <title>AJ veladoras | Aromáticas</title>
</head>
<body>
    <?php
        include 'layouts/nav.php';
    ?>
    <form class="form-cart" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="al22220282@utcj.edu.mx">
        <input type="hidden" name="display" value="1">
        <input type="hidden" name="page_style" value="AJ-veladoras">
        <input class="btn btn-primary" type="submit" value="Ver carrito &#128722;">
    </form>
    <h1 class="candle-type-tittle">Velas aromáticas</h1>
    <?php
        include('connection.php');
        $consul = "SELECT * FROM productos WHERE item_type = 'aromatica'";
        $resul = mysqli_query($connection, $consul) or die ("Algo salio mal");
        
        while($column = mysqli_fetch_array($resul)){
            echo "<div class=item-area>";
                echo "<div class=candles-area>";
                    echo "<img class=candle-img src=images/".$column['image'].">";
                    echo "<div>";
                        echo "<h5 class=card-title>".$column['item_name']." (".$column['item_odor'].") $".$column['price']."</h5>";
                        echo "<p class=card-text>".$column['description']."</p>";
                        echo "<form style=margin-top: 5px target=paypal action=https://www.paypal.com/cgi-bin/webscr method=post>";
                            echo "<input type=hidden name=add value=1>";
                            echo "<input type=hidden name=cmd value=_cart>";
                            echo "<input type=hidden name=business value=al22220282@utcj.edu.mx>";
                            echo "<input type=hidden name=item_name value=".$column['item_name'].">";
                            echo "<input type=hidden name=item_number value=".$column['item_odor'].">";
                            echo "<input type=hidden name=amount value=".$column['price'].">";
                            echo "<input type=hidden name=page_style value=AJ-veladoras>";
                            echo "<input type=hidden name=no_note value=1>";
                            echo "<input type=hidden name=currency_code value=MXN>";
                            echo "<button class=button type=submit>Agregar al carrito &#10133;</button>";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    ?>  



</body>
</html>