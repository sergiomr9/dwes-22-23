<?php
//Esto es un comentario
/*Esto es un comentario multilinea */
$num =7;
    $hasta =15;
?>


<!DOCTYPE html>
<htm lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device/width. initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                    <th>Tabla del <?php echo $num?></th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $hasta; $i++){?>
                    <tr>
                        <td> <?php echo $num?> x <?php $i?></td>
                        <td> <?php echo $num*$i ?> </td>
                    </tr>
                 <?php }?>
            </tbody>
        </table>
</body>
</htm>