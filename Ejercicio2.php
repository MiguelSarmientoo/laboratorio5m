<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
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
<h2 class="text-center">Ejercicio 2</h2>
    <div class="container mt-5">
        <form method="post" action="ejercicio2.php">
        <div class="form-group">
                <label for="precio">Introduce el precio:</label>
                <input type="number" class="form-control" id="preciogaseosa" name="preciogaseosa" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Introduce la cantidad:</label>
                <input type="number" class="form-control" id="cantidadgaseosa" name="cantidadgaseosa" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calcular</button>
            <br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Datos del formulario
            $preciogaseosa = $_POST['preciogaseosa'];
            $cantidadgaseosa = $_POST['cantidadgaseosa'];

            if ($preciogaseosa>=0 && $cantidadgaseosa>=0) {
                $DescuentoEspecial =0.05;
                $DescuentoEspecialAdicional =0.07;
                //Aplicamos un 5% de descuento si la gaseosa es de 3L

                $NuevoPrecio = $preciogaseosa - $preciogaseosa *$DescuentoEspecial;

                // Importe de la compra
                $importeCompra = $NuevoPrecio * $cantidadgaseosa;

                // Importe del descuento
                $importeDescuento = $NuevoPrecio * $DescuentoEspecialAdicional ;

                // Importe a pagar
                $importePagar = $importeCompra - $importeDescuento;

                // Obsequio de caramelos
                $caramelosregalo = $cantidadgaseosa * 2;
                // Resultados

                echo '<div class="alert alert-success" role="alert">';
                echo '<h3>RESULTADOS:</h3>';
                echo '<p>Compró: '.$cantidadgaseosa.' gaseosas de 3 litros.</p>';
                echo '<p>El nuevo precio será: '.$NuevoPrecio.'</p>';
                echo '<p>Importe de Compra: '.$importeCompra.'</p>';
                echo '<p>Importe a Pagar: '.$importePagar.'</p>';
                echo '<p>Importe por Descuento: '.$importeDescuento.'</p>';
                echo '<p>Recibirá '.$caramelosregalo.' caramelos de regalo.</p>';
                echo '</div>';

            }else{
                echo '<div class="alert alert-danger mt-3" role="alert">';
                echo '<h2>Digite cuidadosamente los números</h2>';
                echo '</div>';
                };
        }
        ?>
    </div>
</body>
</html>