<?php

use Users\User;

   $formulario = new User($_POST);
    $formulario->validar();
    if ($formulario->esValido()) {
        $formulario->guardar();
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
    <?php //$formulario->pintar()?>
</body>
</html>