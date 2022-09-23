<?php 
    require('./fpdf184/fpdf.php');
    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Oswald', 'B', 20);
    $pdf->Cell(176,5,'Hola');
    $pdf->Output();
?>