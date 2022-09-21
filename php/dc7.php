<!Doctype html>
<html>
    <head>
            <title>Ejemplo</title>
            <?php
                $n=8;
            ?>
           
    </head>
    <body>
        <?php
           for ($i=1; $i <= $n; $i++) { 
            for ($b=1; $b <=$n-$i ; $b++) { 
                echo " ";
            }
            for ($a=1; $a <=($i*2)-1; $a++) { 
               echo "*";
            }
            echo"<br>";
           }
        ?>
    </body>
</html>