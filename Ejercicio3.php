<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
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
    <h2 class="text-center">EJERCICIO 3</h2>
    <div class="container mt-5">
        <form method="post" action="ejercicio3.php">
        <div class="form-group">
                <label for="tarifa">Introduce la tarifa:</label>
                <input type="number" class="form-control" id="tarifaauto" name="tarifaauto" required>
            </div>
            <div class="form-group">
                <label for="dias">Introduce los dias de alquiler:</label>
                <input type="number" class="form-control" id="diasauto" name="diasauto" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calcular</button>
            <br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Datos del formulario
            $tarifaauto = $_POST['tarifaauto'];

			$diasauto = $_POST['diasauto'];
            
            $PorcentajeDescuento =0.15;
            
            if ($tarifaauto>=0 && $diasauto>=0) {

                			// Importe bruto
			$importeBruto = $tarifaauto * $diasauto;

			// Descuento del 15%
			$descuentoauto = $importeBruto * $PorcentajeDescuento;

			// Importe neto a pagar
			$importeNeto = $importeBruto - $descuentoauto;

			// Cantidad de lapiceros de obsequio
			$lapiceros = $diasauto * 3;
            
            // Resultados
            echo '<div class="alert alert-success" role="alert">';
            echo '<h3>RESUMEN DE ALQUILER:</h3>';
            echo '<p>Importe neto: '.$importeNeto.'</p>';
            echo '<p>Importe bruto: '.$importeBruto.'</p>';
            echo '<p>Descuento: '.$descuentoauto.'</p>';
            echo '<p>Recibira '.$lapiceros.' lapiceros de regalo.</p>';
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