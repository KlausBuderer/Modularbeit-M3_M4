<?php
require_once'includes/fpdf/fpdf.php';

$pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',40);
 $pdf->Cell(20,10,'Medien-Gutschein ');
 $pdf->SetFont('Arial','B',15);
 $pdf->Cell(120,120,'Herzlichen Gratulation zu deinem erworbenen wissen.');
 $pdf->Image('includes/images/spieler_gokart.png', '10', '80', '0', '0');
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(120,200,'Du darfst fuer diesen Gutschein');
 
 $pdf->Output(); 
?>