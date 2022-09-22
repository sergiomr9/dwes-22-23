<!Doctype html>
<?php 
$nombre = "SERGIO";
$c="";
$error = false;

?>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>BIENVENIDO AL FORMULARIO DE <?=$nombre?></h1><br>
        <form action="EjercicioCadenas.php" method="get">
            Cadena: <input type="text"> 
            <input type="submit" value="Enviar" name="cadena" 
                id="" value="<?=$c?>" placeholder="introduce la cadena">

        </form>
        <div>
            <ul>
                <tr><td> Número de vocales: <?=$c?> </td></tr>
                <tr><td> Número de consonantes: <?=$c?> </td></tr>
                <tr><td> Palindromo: <?=$c?> </td></tr>
            </ul>
        </div>
    </body>
</html>