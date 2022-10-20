<?php
require("CuentaBancaria.php");
$milloneti = new CuentaBancaria("milloneti",1000000);
$agapito = new CuentaBancaria("agapito", 30345);
$pobre = new CuentaBancaria("pobreton", -10000);
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
    <h2>Haz que el Milloneti tenga 100 retiradas de 1000 euros</h2>
    <?php 
        echo "<p>Milloneti tiene ". $milloneti->getSaldo(). " lereles";
        for ($i=0; $i < 100; $i++) { 
            $milloneti->retirar(1000);
        }
        echo "<p>ahora Milloneti tiene milloneti ". $milloneti->getSaldo(). " lereles";
    ?>
    <h2>Haz que Agapito tenga un ingreso de 1200 euros</h2>
    <?php
        echo "Agapito tiene ".$agapito->getSaldo()." lereles y tendrá un ingreso de 1200";
        $agapito->ingresar(1200);
        echo "ahora agapito tiene ".$agapito->getSaldo()." lereles, es un poco más rico ****antorchas****";
    ?>
    <h2>Muestra el saldo de las 3 cuentas. Solo el saldo.</h2>

    <h2>Pobretón ha hackeado el banco y ha conseguido unir la cuenta del Milloneti a la suya.</h2>
    <?php 
        $pobre->unirCon($milloneti);
    ?> 
    <h2>Agapito es buena persona y decide transferir la mitad de su salario a Milloneti para que rehaga su vida.</h2>
    <?php 
        $agapito->transferirA($milloneti,($agapito->saldo()/2))
    ?>
    <h2>Muestra el detalle (método mostrar) de las 3 cuentas.</h2>
</body>
</html>