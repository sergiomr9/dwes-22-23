<!Doctype html>
<html>
    <head>
            <title>Ejemplo</title>
            <?php
                $n1 = 4;
                $n2 = 6
            ?>
           
    </head>
    <body>
        <?php
            $s = $n1+$n2;
            $r = $n1-$n2;
            $m = $n1*$n2;
            $d = $n1/$n2;
            $a = array($s++, $r++, $m++, $d++);
            $b = array($s--, $r--, $m--, $d--);
            echo "print_r($a)";
            echo "print_r($b)";
        ?>
    </body>
</html>