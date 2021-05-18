<?php
include_once "../Controller/partenaireC.php";
require('fpdf/fpdf.php');

	
 
 

$partenaireC = new partenaireC();
$resultat=$partenaireC->afficherpartenaire();

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell(10,10,"Partenaires",'C');
$pdf->Ln(20);
$pdf->Cell(5,5,"liste des Partenaires:",'C');
$pdf->ln();
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,10,"Nom ",1,0,'C'); 
$pdf->Cell(40,10,"Prenom",1,0,'C');
$pdf->Cell(40,10,"Adresse",1,0,'C');
$pdf->Cell(40,10,"Pdp",1,0,'C');
$pdf->Cell(40,10,"Numero De Telephone",1,0,'C');



$pdf->Ln(); 



foreach($resultat as $row)
{
$pdf->SetFont('times','',12);
$pdf->Cell(40,10,$row['nom'],1,0,'C');
$pdf->Cell(40,10,$row['prenom'],1,0,'L');
$pdf->Cell(40,10,$row['adresse'],1,0,'L'); 
$pdf->Cell(40,10,$row['pdp'],1,0,'L'); 
$pdf->Cell(40,10,$row['tel'],1,0,'L'); 
$pdf->Ln(); 
}
$pdf->Output("F","test.pdf");
 header('Location: test.pdf');
 






	
	

?>

	

	
	
	

