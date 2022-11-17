<?php

    use Users\Campo;

    spl_autoload_register(function ($class) {//Autoload
        $classPath = "../";
        $file = str_replace('\\', '/', $class);
        require("$classPath${file}.php");
    });   
    $config = Users\GestorUsuarios::singleton();
    $form = new User($_POST);
    $form->validarCampos();
    if ($form->isValid()) {
        $form->guardarUsuario();
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
    <?php $form->print()/*pinta el formulario*/?>
</body>
</html>