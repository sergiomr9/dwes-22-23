<?php 

    require('Banco.php');

    $BancoMalvado = new BancoMalvado();
    $BancoMalvado->setCuenta("cuentaES65noseque");
    $BancoMalvado->setCantidad(46564554);

     function bancoAleatorio(){
        $tipo="";
        $num= mt_rand(1,3);
        switch ($num) {
            case 1:
                $tipo="BancoMalvado";
                break;
            case 2:
                $tipo="BitCoinConan";
                break;
            case 3:
                $tipo="BancoMaloMalisimo";
                break;
        }
        return $tipo;
    }
    function escribeBanco(){
        $miBanco = new (bancoAleatorio());
        $miBanco->setCuenta("ES448874");
        $miBanco->setCantidad(mt_rand(1,648554));
        echo $miBanco->estableceConexion()."<br>";
        echo $miBanco->compruebaSeguridad()."<br>";
        echo $miBanco->pagar($miBanco->getCuenta(),$miBanco->getCantidad());
    }
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
    <h1>BANCO MALVADO</h1><br>
    <h2>todos los bancos son malvados</h2><br>
    <?php 
        $BancoMalvado->estableceConexión()."<br>";
        $BancoMalvado->compruebaSeguridad()."<br>";
        $BancoMalvado->pagar($BancoMalvado->getCuenta(),$BancoMalvado->getCantidad());
    ?>
    <br><br><br>

    <h2>BANCOS ALEATORIOS, CADA CUAL PEOR QUE EL ANTERIOR</h2>
    <?php 
        bancoAleatorio();
        escribeBanco();
    ?>

</body>
</html>