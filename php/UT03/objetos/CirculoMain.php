<?php
require("Circulo.php");
 $miCirculo = new Circulo();
 $miCirculo->setRadio(12);

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
    <h1> si tienes radio <?=$miCirculo->getRadio()?></h1>
    <p>Tu area es: <?=$miCirculo->getArea()?></p>
</body>
</html>