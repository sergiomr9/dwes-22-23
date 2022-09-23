<?php 

$nombre = "";
$empresa = "";
$presentate = "";
$fecha = "";
$error = false;
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if ($nombre == "") {
        $nombre ="";
        $error = true;
    }else{
        if (isset($_GET['empresa'])) {
            $empresa = $_GET['empresa'];
            if ($empresa == "") {
                $empresa ="";
                $error = true;
            }else{
                if (isset($_GET['presentate'])) {
                    $presentate = $_GET['presentate'];
                    if ($presentate == "") {
                        $presentate ="";
                        $error = true;
                    }else{
                        if (isset($_GET['fecha'])) {
                            $fecha = $_GET['fecha'];
                            if ($presentate == "mm/dd/yy") {
                                $presentate ="mm/dd/yy";
                                $error = true;
                            }
                        }
                    }
                }
            }
        }
    }
}
require('./fpdf184/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(176,5,'CARTA DE RECOMENDACION', 0,0, 'C');
$pdf->Ln();
$pdf->Cell(176,5,'------------------------', 0,0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(176,5,"Nombre: ".$nombre,0,0,'L');
$pdf->Ln();


$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(176,5,"Empresa: ".$empresa,0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(176,5,"Presentacion: ".$presentate,0,0,'L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(176,5,"Fecha de nacimiento: ".$fecha,0,0,'L');
if($nombre !=""){
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html>
    <head> 
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device/width. initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="FormCarta.css">
    </head>
    <body>
        <div class="cuerpo">
            <p class="tit">Genera tu carta de motivación</p>
            <div class="formulario">
                <form action="GenFormCarta.php" method="get">
                    <div class="f">
                        <input type="text" name="nombre" placeholder=" Tu nombre" id="">
                        <input type="text" name="empresa" placeholder="Nombre de la empresa">
                        <input type="text" name="presentate" placeholder="Cuentanos sobre ti">
                        <input type="date" name="fecha" placeholder="Fecha de nacimiento">
                        <input type="submit" name="enviar" value="Generar PDF" class="mandar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>