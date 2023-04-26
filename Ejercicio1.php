<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        margin-top: 40px;

    }
</style>

<body>
    <h2 class="text-center">EJERCICIO 1</h2>
    <div class="container mt-5">
        <form method="post" action="ejercicio1.php">
            <div class="form-group">
                <label for="importe-total">Introduce el importe total vendido:</label>
                <input type="number" class="form-control" id="importe-total" name="importe-total" required>
            </div>
            <div class="form-group">
                <label for="hijos">Introduce el número de hijos en edad escolar:</label>
                <input type="number" class="form-control" id="hijos" name="hijos" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calcular</button>
            <br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Datos del formulario
            $importeTotalVendido = $_POST['importe-total'];
            $numHijosEscolar = $_POST['hijos'];

            if ($importeTotalVendido>=0 && $numHijosEscolar>=0) {
                // Variables
                $sueldoB = 600;
                $BonificacionH = 50;
                $ComisionP = 7.5;
                $DescP = 11;
                
                // Bonificación
                $bonificacionfinal = $numHijosEscolar * $BonificacionH;
                
                // Comisión
                $comisionfinal = $importeTotalVendido * ($ComisionP / 100);
                
                // Sueldo bruto
                $sueldoBruto = $sueldoB + $comisionfinal + $bonificacionfinal;
                
                // Descuento
                $descuentofinal = $sueldoBruto * ($DescP / 100);
                
                // Sueldo neto
                $sueldoNeto = $sueldoBruto - $descuentofinal;

                // Resultados
                echo '<div class="alert alert-success" role="alert">';
                echo '<div class="mt-4">';
                echo '<h3>RESULTADOS:</h3>';
                echo '<ul>';
                echo '<li>Bonificación: S/ '.$bonificacionfinal.'</li>';
                echo '<li>Sueldo Bruto: S/ '.$sueldoBruto.'</li>';
                echo '<li>Descuento: S/ '.$descuentofinal.'</li>';
                echo '<li>Sueldo Neto: S/ '.$sueldoNeto.'</li>';
                echo '</ul>';
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