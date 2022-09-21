<?php
//Esto es un comentario
/*Esto es un comentario multilinea */
   $nombre = "sergio";
   $r = 3;
   $error = false;
   if(isset($_GET('radio'))){
        $r=$_GET('radio');
        if ($r == "") {
            $r = 0;
            $error = true;
        }
   }else{
        $r=0;
   }
   print_r($_GET);
?>


<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Bienvenido a la calculadora <?=$nombre?></h1>
        <div>
            <?php if($error){ ?>
                <h1>eres un poco burro</h1>
            <?php }?>

            ?>
            <form action="dc5.ph" method="get">
                Radio: <input type="number" name="radio" step="0.001" id="" value="<?=$r?>"> <br>
                <input type="submit" value="calcular">
            </form>
        </div>
        <div>
            <p>Àrea: <?$sr*$sr*M_PI?></p>
            <p>Longitud: <?2*$r*M_PI?></p>
        </div>
    </body>
</html>