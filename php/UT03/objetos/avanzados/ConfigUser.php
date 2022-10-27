<?php 

    require('Config.php');

    $user1 = Config::singleton();//->setNombre('pedro');
    $user2 = Config::singleton();//->setNombre('');
    $user3 = Config::singleton();//->setNombre('');

    $user1->setNombre('pedro');
    $user2->setNombre('juancar');
    $user3->setNombre(" Michael Mouse");

   
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
    <h1>EJERCICIO SINGLETON</h1><br>
    <h3>MICHAEL 'MICKEY' MOUSE NO ES MI AMIGO</h3>
    <?php
         echo $user1->getNombre()."<br>";
         echo $user2->getNombre()."<br>";
         echo "'Mickey' is a nickname, nicknames are for friends, and ".$user3->getNombre()." is no friend of mine"; 
    ?>
</body>
</html>