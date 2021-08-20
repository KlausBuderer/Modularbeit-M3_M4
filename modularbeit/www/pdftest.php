<?php
require_once'includes/fpdf/fpdf.php';
Header('Content-Type: application/pdf; charset=utf-8'); 

Variabeln:
$eingeloest = 3;
$text1=utf8_decode("MEDIENGUTSCHEIN");
$text2=utf8_decode("Herzlichen Gratulation - Du warst fleissig und wirst nun belohnt !");
$text3=utf8_decode("Du darfst mit diesem Gutschein ");
$text4=utf8_decode("Stunden Medien benutzen.");
$text5=utf8_decode("Du musst nicht alles auf einmal einmal einlösen, deine Eltern");
$text6=utf8_decode("können auch nur ein Teil davon einlösen");
$text7=utf8_decode("Viel Spass !");
$text8=utf8_decode("dein Mediengutschein Portal");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('includes/images/spieler_gokart.png',10,10,50);    
$pdf->SetFont('Arial','B',30);
$pdf->Cell(60);
$pdf->Cell(110,30,"$text1",1,0,'C');
$pdf->SetFont('Arial','B',15);
$pdf->ln();
$pdf->ln();
$pdf->Cell(5,30);
$pdf->Cell(10,20,"$text2");
$pdf->Image('includes/images/mediengutschein_computer.png',100,100,50); 
$pdf->ln();
$pdf->text(15,170, "$text3" . " $eingeloest " . "$text4");
$pdf->text(15,190, "$text5");
$pdf->text(15,200, "$text6");
$pdf->text(15,240, "$text7");
$pdf->text(15,250, "$text8");
$pdf->Output(); 
?>