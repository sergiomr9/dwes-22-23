<?php 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <link rel="stylesheet" src="FormHorario.css">
        <title>Document</title>
    </head>
    <body>
        <div class="cuerpo">
            <div class="formulario">
                <form action="Horario.php" method="get">
                    <div class="f">
                        <input type="text" name="nombre" placeholder=" Tu nombre" id="">
                        <label for="nombre">Nombre</label>

                        <input type="text" name="curso" placeholder=" Tu curso" id="">
                        <label for="curso">Curso</label>

                        <input type="text" name="a1" placeholder=" Tu nombre" id="">
                        <label for="a1">Asignaturas</label>

                        <input type="text" name="a2" placeholder=" Tu nombre" id="">
                        <label for="a2">Asignaturas</label>

                        <input type="text" name="a3" placeholder=" Tu nombre" id="">
                        <label for="a3">Asignaturas</label>

                        <input type="text" name="a4" placeholder=" Tu nombre" id="">
                        <label for="a4">Asignaturas</label>

                        <input type="text" name="a5" placeholder=" Tu nombre" id="">
                        <label for="a5">Asignaturas</label>

                        <input type="text" name="a6" placeholder=" Tu nombre" id="">
                        <label for="a6">Asignaturas</label>

                        <button type="submit" class="">Generar Horario</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>