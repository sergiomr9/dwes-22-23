<!Doctype html>
<html>
    <head>
            <title>Ejemplo</title>
            <?php
                $t = "Hola Mundo";
            ?>
            <style>
                .n{
                    font-style:italic;
                    font-weight:bold;
                }
            </style>
    </head>
    <body>
        <?php echo "Hola Mundo" ?>
        <br>
        <div class="n">
            <?=$t."Esta página ha sido programada por Sergio"?>
        </div>
    </body>
</html>