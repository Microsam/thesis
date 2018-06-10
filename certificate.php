<?php
require_once("init.php");

if(!is_logged() == 404){
	echo 'not logged';
}else{
define('FPDF_FONTPATH','font');

$pdf = new FPDF();
$pdf->AddPage('L','Letter');
$pdf->AddFont('ananda','R');
$pdf->SetFont('ananda','R',40);
$pdf->Image('media/images/cert.jpg',0,0,-300,-300);
$pdf->SetXY(13,118);
$pdf->SetTextColor(45,50,125);
$pdf->Cell(10,0,'Darwin Buelo',0,0,'L');
$pdf->Output();

}
?>
