<!Doctype html>
<?php 
$nombre = "SERGIO";
$c=$_GET['cadena'];
$error = false;
$v = 0;
$con = 0;
$pal = true;
if(isset($_GET['cadena'])){
    $c=$_GET['cadena'];
    if ($c == "") {
        $c = "";
        $error = true;
    }
}else{
    $c=0;
}

//Calcular vocales y consonantes
for ($i=0; $i < strlen($c); $i++) { 
    if ($c[$i]== "a" || $c[$i]== "e" || $c[$i]== "i" || $c[$i]== "o" || $c[$i]== "u") {
        $v++;
    }else{
        $con++;
    }
}
//Palíndromo
?>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="EjercicioCadenas.css">
    </head>
    <body>
        <h1>BIENVENIDO AL FORMULARIO DE <?=$nombre?></h1><br>
        <?php if($error){ ?>
                <h1>eres un poco burro</h1>
            <?php }?> <br>
        
        <div class="formulario">
        <form action="EjercicioCadenas.php" method="get">
            <span class="cadena">Cadena</span><input type="text" name="cadena" 
                id="" value="<?=$c?>" placeholder="introduce la cadena"> 
            <input type="submit" value="Enviar">

        </form>
        </div>
        <div>
            <ul>
                <li> Número de vocales: <?=$v?> </li>
                <li> Número de consonantes: <?=$con?> </li>
                <li> Palindromo: </li>
            </ul>
        </div>
    </body>
</html>