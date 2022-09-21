<!Doctype html>
<html>
    <head>
            <title>Ejemplo</title>
            <?php
                $filas=8;
            ?>
           
    </head>
    <body>
        <?php
            $cadena=null;
           for ($i = 1; $i <= $filas; $i++) {
            for ($h = $i; $h <= $i; $h++) {
                $cadena .= "*";
            }
            echo $cadena."<br />";
        }
        ?>
    </body>
</html>