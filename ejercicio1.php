<?php

$venta = 1000;
$nombrevendedor = "Jose Martinez" . "<br>";
$nombrecliente = "Carolina Grande" . "<br>";
$fechafactura = date("d/m/Y");
$numerofactura = "2323-2222";
$descuento = 0 ;
$totalpago = 0 ;


if ($venta > 0   && $venta < 0) {
   $descuento = $venta * 0.0;
} elseif ( $venta >= 100 && $venta = 500) {
    $descuento = $venta * 0.15;
} else if ( $venta > 500 && $venta <= 1000) {
    $descuento = $venta * 0.20;
} else if ($venta < 1000) {
    $descuento = $venta * 0.30;
} else {
    echo "No aplica descuento";
}

$totalpago= $descuento - $venta ;

echo "Nombre del Vendedor: " . $nombrevendedor . "<br>";
echo "Nombre del Cliente: " . $nombrecliente . "<br>";
echo "Fecha de la factura: " . $fechafactura . "<br>";
echo "Numero de Factura: " . $numerofactura . "<br>";
echo "VENTAS: " . $venta . "<br>";
echo "DESCUENTO: ". $descuento . "<br>";
echo "<strong>" . "TOTAL A PAGAR: " . $totalpago . "</strong>"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ejercici01</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO
    </div>
    <div class="container">
        <form method="POST" action="Ejemplo5.php">
            <div class="form-group">
                <label for="">Nombre Vendedor</label>
                <input type="text" class="form-control" placeholder="" name="nota1">
            </div>
            <div class="form-group">
                <label for="">Nombre Cliente</label>
                <input type="text" class="form-control" placeholder="" name="nota2">
            </div>
            <div class="form-group">
                <label for="">Numero de Factura</label>
                <input type="text" class="form-control" placeholder="000-000-000" name="fact">
            </div>
            <div class="form-group">
                <label for="">Fecha de Facturacion</label>
                <input type="date" class="form-control" placeholder="Escriba una nota" name="nota2" value="<?php echo date("d/m/Y").$hoy ?>">
            </div>
            <div class="form-group">
                <label for="">Compras Realizadas</label>
                <input type="number" class="form-control" placeholder="" name="nota2" laceholder="0.00">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Calcular</button>
        </form>
       </form>
        <br>
        <table class="table table-hover table-bordered">
            <thead class= "btn-primary">
                <tr>
                    <th>NOMBRE DEL VENDEDOR</th>
                    <th>NOMBRE DEL CLIENTE</th>
                    <th>NUMERO DE FACTURA</th>
                    <th>FECHA</th>
                    <th>COMPRA</th>
                    <th>DESCUENTO</th>
                    <th>TOTAL A PAGAR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nombrevendedor ?></td>
                    <td><?php echo $nombrecliente ?></td>
                    <td><?php echo $numerofactura ?></td>
                    <td><?php echo $fechafactura ?></td>
                    <td>$ <?php echo number_format($venta, 2) ?></td>
                    <td>$ <?php echo number_format($descuento, 2) ?></td>
                    <td>$ <?php echo number_format($totalpago, 2) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>>