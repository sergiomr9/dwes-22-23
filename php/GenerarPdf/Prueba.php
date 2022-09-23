<?php 
    require('./fpdf184/fpdf.php');
    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Times', 'B', 20);
    $pdf->Cell(176,5,'Hola', 0,0, 'C');
    $pdf->Output();
?>