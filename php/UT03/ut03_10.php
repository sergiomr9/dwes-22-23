<?php
    function generarArray($valores=10,$maximo =10,$minimo=0){
        $array = [$valores];
        for ($i=0; $i < count($array); $i++) { 
            $array[$i] = mt_rand($maximo,$minimo);
        }
        print_r($array);
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
    <form action="ut03_10.php" method="get">
        <input type = "number" name="valores">:Numero de valores<br>
        <input type = "number" name="maximo">:Valor máximo<br>
        <input type = "number" name="minimo">:Valor mínimo<br>
    </form>
   <?php 
       generarArray($_GET['valores'],$_GET['maximo'],$_GET['minimo']);
   ?>
</body>
</html>