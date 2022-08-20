<?php

$colorball = "";
$colorball = strtolower($colorball);
$descuento = 0;
$valorcompra = 0;
$totalpago = 0;

if (isset($_POST["procesar"])){
    $valorcompra = $_POST["compra"];
    $colorball = $_POST["colorbolita"];
    
    if ($colorball == "blanca"){
        $descuento = $valorcompra * 0;
    } else if ($colorball == "verde"){
        $descuento = $valorcompra * 0.1;
    } else if ($colorball == "amarilla"){
        $descuento = $valorcompra * 0.25;
    } else if ($colorball == "azul"){
        $descuento = $valorcompra * 0.5;
    } else if ($colorball == "roja"){
        $descuento = $valorcompra * 1;
    } else {
        echo "color seleccionado no tiene descuento";
    }
}


$totalpago = $valorcompra - $descuento;

echo "COLOR DE LA BOLITA SELECDCIONADA: " . $colorball;
echo "TOTAL COMPRA SIN DESCUENTO" . $valorcompra;
echo "DESCUENTO: " . $descuento;
echo "TOTAL A PAGAR: " . $totalpago;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="POST">
        <label for="">VALOR DE LA COMPRA</label>
        <input type="text" require name="compra" placeholder=""><br>
        <label for="">ELIJA UN COLOR DE LA LISTA</label>
        <select name="colorbolita" required>
            <option value="">SELECCIONE</option>
            <option value="blanca">BLANCA</option>
            <option value="verde">VERDE</option>
            <option value="amarilla">AMARILLA</option>
            <option value="roja">ROJA</option>
            <option value="azul">AZUL</option>
        </select>

        <button type="submit" name="procesar">PROCESAR DATOS</button>
    </form>
    <br>
    <table>
        <thead>
            <th>
            <th>color</th>
            <th>total compra sin descuento</th>
            <th>descuento</th>
            <th>total a pagar</th>
            </th>
        </thead>
        <tbody>
            <td><?php echo $colorball?></td>
            <td><?php echo $valorcompra?></td>
            <td><?php echo $descuento?></td>
            <td><?php echo $totalpago?></td>
        </tbody>
    </table>
</body>
</html>