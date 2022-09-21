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
                for($b1 ; $b< $n-$i ; $b++){
                    echo " ";
                }
                for ($j=0;$j < ($i*2)-1 ; $j++) { 
                   echo "*";
                }
               echo"<br>";
           }
        ?>
    </body>
</html>