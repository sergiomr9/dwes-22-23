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
           for($altura = 1; $altura<=$n; $altura++){
            //Espacios en blanco
            for($blancos = 1; $blancos<=$n-$altura; $blancos++){
                echo" ";
            }
 
            
            for($asteriscos=1; $asteriscos<=($altura*2)-1; $asteriscos++){
                echo"*";
            }
            echo"<br>";
        }
        ?>
    </body>
</html>