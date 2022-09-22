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
        $c = 0;
        $error = true;
    }
}else{
    $c=0;
}
print_r($_GET);

for ($i=0; $i < strlen($c); $i++) { 
    if ($c[$i]== "a" || $c[$i]== "e" || $c[$i]== "i" || $c[$i]== "o" || $c[$i]== "u") {
        $v++;
    }else{
        $con++;
    }
}
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
        <?php if($error){ ?>
                <h1>eres un poco burro</h1>
            <?php }?> <br>
        
        <form action="EjercicioCadenas.php" method="get">
            Cadena: <input type="text" name="cadena" 
                id="" value="<?=$c?>" placeholder="introduce la cadena"> 
            <input type="submit" value="Enviar">

        </form>
        <div>
            <ul>
                <li> Número de vocales: <?=$v?> </li>
                <li> Número de consonantes: <?=$con?> </li>
                <li> Palindromo: <? if ($pal) {?>
                    <p>Es palíndromo</p>
                <?php } else{ ?>
                    <p> No es palíndromo</p>
                   <?php }
                    ?> </li>
            </ul>
        </div>
    </body>
</html>