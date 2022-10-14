<?php 
    $data = array(1,5.2,[1,2,3],[8],"hola","adios");
    function analizarTipos($data){
        $bol = 0;
        $num = 0;
        $cad = 0;
        $doble = 0;
        $arr = 0;
        foreach($data as $data){
            //gettype($data);
            switch (gettype($data)) {
                case 'integer':
                    $num++;
                    break;
                case 'boolean':
                    $bol++;
                    break;
                case 'double':
                    $doble++;
                    break;
                case 'string':
                    $cad++;
                    break;
                case 'array':
                    $arr++;
            }
        }
       $analisis = [
            'int' => $num,
            'string' => $cad,
            'array' => $arr,
            'double' => $doble,
            'boolean' => $bol
        ];
        print_r($analisis);
    }
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
    <?php 
        analizarTipos($data);
    ?>
</body>
</html>