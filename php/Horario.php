<?php 


    $horario = [
        "dias" => ["","lunes", "martes", "martes", "miercoles", "jueves", "viernes"],
        "horas" => ["","16:00 - 16:55", "16:55 - 17:50", "17:50 - 18:45", "19:10 - 20:05", "20:05 - 21:00", "21:00 - 21:55" ],
        //"asignaturas"=> ["DWEC", "EIE", "ITGS", "DAW", "DWES", "DIW"],
        "curso" => [
            2 => ["DWEC","ITGS", "DIW", "EIE", "DWES"],
            3 => ["DWEC", "DAW", "DIW", "DAW", "DWES"],
            4 => ["DWEC", "DAW", "DIW", "DAW", "DWES"],
            5 => ["EIE", "DIW", "DWES", "DWES", "DWEC"],
            6 => ["EIE", "DIW", "DWES", "DWES", "DWEC"],
            7 => ["ITGS", "DIW", "DWES", "DWES", "DWEC"]
        ]
    ]


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <title>Document</title>
        <style>
            td{
                border:2px solid black;
            }
        </style>

    </head>
    <body>
        <table>
            <?php 
                for ($r=0; $r < count($horario["dias"]) ; $r++) { 
                    echo "<tr>";
                            
                            for ($c=0; $c <count($horario["horas"] ) ; $c++) { 
                                echo "<td>";
                                        if ($r==0) {
                                            echo $horario["dias"][$c];
                                        }else if ($c==0) {
                                            echo $horario["horas"][$r];
                                        }
                                        if ($r>0&$c>0) {
                                            echo $horario["curso"][$r][$c];
                                        }
                                     "</td>";
                            }
                         "</tr>";
                }
            ?>
        </table>
    </body>
</html>