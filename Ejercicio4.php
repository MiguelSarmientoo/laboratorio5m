<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        margin-top: 40px;

    }
</style>
</head>
<body>
    <h2 class="text-center">EJERCICIO 4</h2>
    <div class="container mt-5">
        <form method="post" action="ejercicio4.php">
        <div class="form-group">
                <label for="precio">Introduce el precio del cono:</label>
                <input type="number" class="form-control" id="preciocono" name="preciocono" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Introduce la cantidad:</label>
                <input type="number" class="form-control" id="cantidadcono" name="cantidadcono" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calcular</button>
            <br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Datos del formulario
            $preciocono = $_POST["preciocono"];
			$cantidadcono = $_POST["cantidadcono"];

            if ($preciocono>=0 && $cantidadcono>=0) {

			//Importe compra
            $importeCompra = $preciocono * $cantidadcono;
            
            //Primer descuento
            $descuento1 = $importeCompra * 0.05;
            
            //Primer descuento aplicado
            $importeDescuento1 = $importeCompra - $descuento1;
            
            //Segundo descuento
            $descuento2 = $importeDescuento1 * 0.05;
            
            //Descuentos aplicados
            $importeFinal = $importeDescuento1 - $descuento2;

            echo '<div class="alert alert-success" role="alert">';
            echo '<h2>COMPRA:</h2>';
            echo '<p>Importe de la compra: '.$importeCompra.'</p>';
            echo '<p>Importe del descuento total: '.($descuento1+$descuento2).'</p>';
            echo '<p>Importe a pagar: '.$importeFinal.'</p>';
            echo '</div>';

            }else{
                echo '<div class="alert alert-danger mt-3" role="alert">';
                echo '<h2>Digite cuidadosamente los números</h2>';
                echo '</div>';
            };
        }
        ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>