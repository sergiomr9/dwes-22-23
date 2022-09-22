<!Doctype html>
<?php 
$nombre = "SERGIO";
$c=$_GET['cadena'];
$error = false;
if(isset($_GET['cadena'])){
    $c=$_GET('cadena');
    if ($c == "") {
        $c = 0;
        $error = true;
    }
}else{
    $c=0;
}
print_r($_GET);
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
            Cadena: <input type="text" name="cadena" 
                id="" value="<?=$c?>" placeholder="introduce la cadena"> 
            <input type="submit" value="Enviar">

        </form>
        <div>
            <ul>
                <li> Número de vocales: <?=$c?> </li>
                <li> Número de consonantes: <?=$c?> </li>
                <li> Palindromo: <?=$c?> </li>
            </ul>
        </div>
    </body>
</html>