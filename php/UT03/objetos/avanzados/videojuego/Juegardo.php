<?php 
    spl_autoload_register(function ($class) {
        $classPath = "./";
        //echo "Autoload llamado";
        // en nuestros proyectos
        // ../src/
        // o la ruta a la raíz del proyecto
        require("$classPath${class}.php");
    });
    function genPj(){
        $clase="";
        $dado = mt_rand(1,3);
        switch ($dado) {
            case 1:
                $clase = new Humano();
                echo "<img src='dado1.png' alt=''><br>";
                echo "TU PERSONAJE ES UN HUMANO";
                break;
            case 2:
                echo "<img src='dado2.png' alt=''><br>";
                $clase = new MagoBlanco();
                echo "TU PERSONAJE ES UN MAGO BLANCO";
                break;
            case 3:
                echo "<img src='dado3.png' alt=''><br>";
                $clase = new MagoOscuro();
                echo "TU PERSONAJE ES UN MAGO OSCURO";
                break;
        }
        return $clase;
    }

   
    $villano = new MagoOscuro();
    
    /*function jugar(MagoOscuro $villano){
        //cosas de jugar
       /* $vlife = 3;
        $hlife = 3; 
        
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO AL JUEGARDO DE OBJETOS AVANZADOS * APLAUSOS APLAUSOS APLAUSOS *</h1>
    <br><br><br>
    <H3>Vas a generar un personaje aleatorio para ti entre una de estas clases:</H3>
    <ul>
        <li>HUMANO</li>
        <li>MAGO BLANCO</li>
        <li>MAGO OSCURO</li>
    </ul><br>
    <h3>El villano siempre será un mago oscuro</h3>
    <h3>Para ello vas a lanzar un dado</h3>
    <form action="Juegardo.php" method="get">
        <input type="submit" name="generar" value="Empezar a jugar">
    </form>
    <?php 
        if (isset($_GET['generar'])) {
            $hero = genPj();
            //jugar();
    ?>
            <form action ="" method="post">
                <input type="submit" name="atacar" value="ATACAR">
                <input type="submit" name="defender" value="DEFENDER"><br>
                
            </form>
            <?php   
                $num = mt_rand(1,2);
                if (isset($GET_['atacar'])) {
                    $hero->atacar();
                    //si el villano no ataca pierdes vida y el villano no
                    $vAction = 1? $villano->atacar() : $villano->defender();
                }elseif (isset($GET_['defender'])) {
                    //defiendes el ataque
                    $hero->defender();
                    $vAction = 1? $villano->atacar() : $villano->defender();
                }
                ?>
            <?php
        }
        
            ?>
</body>
</html>