<?php
include_once "../Controller/reclamationC.php";
require('fpdf/fpdf.php');

	
 
 

$reclamationC = new reclamationC();
$resultat=$reclamationC->afficherReclamation();

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell(10,10,"Reclamation",'C');
$pdf->Ln(20);
$pdf->Cell(5,5,"liste des Reclamation:",'C');
$pdf->ln();
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,10,"Nom ",1,0,'C'); 
$pdf->Cell(40,10,"Prenom",1,0,'C');
$pdf->Cell(40,10,"Email",1,0,'C');
$pdf->Cell(40,10,"Type de réclamation",1,0,'C');
$pdf->Cell(40,10,"Commentaire",1,0,'C');



$pdf->Ln(); 



foreach($resultat as $row)
{
$pdf->SetFont('times','',12);
$pdf->Cell(40,10,$row['nom'],1,0,'C');
$pdf->Cell(40,10,$row['prenom'],1,0,'L');
$pdf->Cell(40,10,$row['email'],1,0,'L'); 
$pdf->Cell(40,10,$row['typeRec'],1,0,'L'); 
$pdf->Cell(40,10,$row['commentaire'],1,0,'L'); 
$pdf->Ln(); 
}
$pdf->Output("F","test2.pdf");
 header('Location: test2.pdf');
 






	
	

?>

	

	
	
	

