<?php 
    //Cree un array vacío.
    $coches = [];
    //Cree un coche con matrícula 1000, marca BMV, carga 30
    $rayoMcQueen = new Coche("1000","BMW","30");
    //Cree un coche con remolque y matrícula 1001, marca Renault, carga 30 y carga remolque 200
    $docHudson = new CocheConRemolque("1001","Reanault", "30", 200);
    //Cree un coche con matrícula 1002, marca Porche, carga 40
    $sallyCarrera = new Coche("1002", "Porche", "40");
    //Cree un coche-grúa con matrícula 1003, marca Renault, carga 20
    $towMater = new CocheGrua("1003", "Reanault", "20");
    //Carga el porche en el coche-grúa
    $towMater->cargarCoche($sallyCarrera);
    /*Mete en el array:
    BMV
    Renault de matrícula 1001
    Y el coche grúa.
    OJO! No metas el Porche, ya va en la grúa
    */
    $coches[] = $rayoMcQueen;
    $coches[] = $docHudson;
    $coches[] = $towMater;
    //Utiliza array_walk para pintar en un div cada uno de los vehículos

    function brumBrum(){
        array_walk($coches, function($item,$key){
            echo    "<div class='$item'>
                        $item->pintarInformacion()
                    </div>";
        });
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
    <?php brumBrum() ?>
</body>
</html>