<?php
//Esto es un comentario
/*Esto es un comentario multilinea */
$num_filas=10;
$num_columnas=$num_filas;

function esPrimo($n){
 if ($n == 0 || $n == 1) {
    return true;
 }else{
    $esprimo = true;
    $c = 2;
    while ($esprimo && $c < ($n/2)) {
        if(($n % $c) == 0 ){
            $esprimo = false;
        }
    }
    return $esprimo;
 }
}
?>


<!DOCTYPE html>
<htm lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device/width. initial-scale=1.0">
    <title>Document</title>
    <style>
         td,table,tr{
            border-collapse: collapse;
            border: 1px solid black;
         }
         table{
            text-align: center;
            width: 300px;
            margin: 0 auto;
         }
         .esprimo{
            background-color: #FF00FF;
         }
    </style>
</head>
<body>
        <table>
            <th>TABLA DE 100</th>
        <?php  for ($i=0; $i < $num_filas; $i++) { ?>
                <tr>
                    <?php for ($j =0; $j< $num_columnas; $j++){?>
                    <td <?php if($esprimo($i.$j))echo "class='esprimo'"?>> <?php echo $i.$j ?> </td>
                <?php } ?>
                </tr>
           <?php }?>  
        </table>
</body>
</htm>