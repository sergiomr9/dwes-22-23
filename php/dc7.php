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
           for ($i=0; $i < $n; $i++) { 
                for($altura=1 ; $altura < $n ; $altura++){
                    echo " ";
                }
               for ($j=0;$j < $i ; $j++) { 
                   echo "*";
               }
               echo"<br>";
           }
        ?>
    </body>
</html>