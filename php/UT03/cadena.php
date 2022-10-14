<?php 
    $cadena = "esternocleidomastoideo";
    $longitud= strlen($cadena);
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
    <?php 
        for ($i=0; $i < count($letras) ; $i++) { 
            echo "<h4>$longitud[$i]</h4><br>";
        }
        $i=0;
        while ($i < $longitud && $letra!='a' && $letra!='A') {
            echo "<h4>$longitud[$i]</h4><br>";
            $i++;
            $letra = $longitud[$i];
        }
        
    ?>
</body>
</html>