<?php
require_once'includes/fpdf/fpdf.php';

$pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',40);
 $pdf->Cell(20,10,'Medien-Gutschein ');
 $pdf->SetFont('Arial','B',25);
 $pdf->Cell(120,120,'Herzlichen Gratulation zu deinem erworbenen wissen.');
 $pdf->Image('includes/images/spieler_gokart.png', '15', '100', '0', '0');
 
 $pdf->Ln(18);
 $pdf->Output(); 
?>