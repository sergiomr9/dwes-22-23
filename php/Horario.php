<?php 


    $horario = [
        "dias" => ["","LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES"],
        "horas" => ["","16:00 - 16:55", "16:55 - 17:50", "17:50 - 18:45","18:45 - 19:10", "19:10 - 20:05", "20:05 - 21:00", "21:00 - 21:55" ],
        //"asignaturas"=> ["DWEC", "EIE", "ITGS", "DAW", "DWES", "DIW"],
        "curso" => [
            1 => ["DWEC","ITGS", "DIW", "EIE", "DWES"],
            2 => ["DWEC", "DAW", "DIW", "DAW", "DWES"],
            3 => ["DWEC", "DAW", "DIW", "DAW", "DWES"],
            4 => ["RECREO"],
            5 => ["EIE", "DIW", "DWES", "DWES", "DWEC"],
            6 => ["EIE", "DIW", "DWES", "DWES", "DWEC"],
            7 => ["ITGS", "DIW", "DWES", "DWES", "DWEC"]
        ],
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
            .cuerpo{
                
            }
            table{
                border-collapse: collapse;
                width: 75%;
                margin-top: 3vw;
                margin-left: 10%;
            }
            td{
                border:2px solid black;
                padding: 0.5vw;
                width: 10vw;
                text-align: center;
            }
            .EIE{
                background-color: #ffffb3;   
            }
            .DWES{
                background-color: #cce6ff;
            }
            .ITGS{
                background-color: #ccffe6;
            }
            .DIW{
                background-color: #ffcccc;
            }
            .DWEC{
                background-color: #ffccb3;
            }
            .DAW{
                background-color: #e6ccff;
            }
           .recreo{
                background-color: #ff66a3;
           }
        </style>

    </head>
    <body>
        <div class="cuerpo">
            <table>
                <?php 
                    for ($r=0; $r < count($horario["dias"])+2 ; $r++) { 
                        echo "<tr>";
                                for ($c=0; $c <count($horario["horas"])-2 ; $c++) { 
                                    if ($r==4 & $c>=1) {
                                        echo "<td colspan=5 class='recreo'> RECREO </td>";
                                        $c+=4;
                                    }else{
                                        echo "<td class='" . $horario['curso'][$r][$c-1] ."'>";
                                    }
                                            if ($r==0) {
                                                echo $horario["dias"][$c];
                                            }else if ($c==0) {
                                                echo $horario["horas"][$r];
                                            }
                                            if ($r>=1 & $c>=1) {
                                                echo $horario["curso"][$r][$c-1];
                                            }else if ($r==0 & $c==0) {
                                                echo"Alumno: Sergio";
                                            }
                                        "</td>";
                                }
                            "</tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>