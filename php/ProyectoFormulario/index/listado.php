<?php
    $data = file_get_contents(
        "lista.csv"
    );

    $lines = explode("\n", $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
        <thead>
        <tr>
            <th>nombre</th>
            <th>apellidos</th>
            <th>sexo</th>
            <th>fecha nacimiento</th>
            <th>calle</th>
            <th>piso</th>
            <th>codigo postal</th>
            <th>ciudad</th>
            <th>pais</th>
            <th>email</th>
            <th>usuario</th>
            <th>contraseña</th>
        </tr>
        </thead>
        <tbody>
                <?php 
                    foreach($lines as $line){
                        echo "<tr>";
                        $fields = explode(";", $line);
                        echo "<td>$fields[0]</td>";
                        echo "<td>$fields[1]</td>";
                        echo "<td>$fields[2]</td>";
                        echo "<td>$fields[3]</td>";
                        echo "<td>$fields[4]</td>";
                        echo "<td>$fields[5]</td>";
                        echo "<td>$fields[6]</td>";
                        echo "<td>$fields[7]</td>";
                        echo "<td>$fields[8]</td>";
                        echo "<td>$fields[9]</td>";
                        echo "<td>$fields[10]</td>";
                        echo "<td>$fields[11]</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>
