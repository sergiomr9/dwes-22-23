<?php 
    $num1 = mt_rand(1,100);
    $num2= mt_rand(1,100);
    $num3 = mt_rand(1,100);

    $numeros = [$num1, $num2, $num3];
    //sort($numeros);
   // for ($i=0; $i < $numeros ; $i++) { 
     //   if ($numeros[$i]>$numeros[$i] {
            
       // }
    //}
    //function ordenar($item){
       // if (condition) {
            # code...
       // }
   // }
  
    if ($numeros[0]>$numeros[1] && $numeros[0]>$numeros[2]) {
       $mayor = $numeros[0];
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
    <?php 
        echo "<h1>$mayor<h/1><br>";
        echo "<h2>$mediano<h/2><br>";
        echo "<h3>$menor<h/3>";
    ?>
</body>
</html>