<?php 
    print_r($_SERVER); echo "<hr>";
    print_r($http_response_header); echo "<hr>";

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
    <form action="" method="post">
        nombre: <input type="text" name="nombre" id="nombre"><hr>
        color: <input type="color" name="color" id="color"><hr>
    </form>
</body>
</html>