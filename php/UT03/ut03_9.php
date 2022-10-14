<?php 
    $v1 = "Hola";
    $v2 = "Adios";
    function intercambiarValores(&$var1, &$var2){
        $caja = "";
        $caja = $var2;
        $var2 = $var1;
        $var1= $caja; 
    }
    echo intercambiarValores(456, "hola");
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
    
</body>
</html>