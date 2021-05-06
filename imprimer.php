<?php
	include "../controller/PdvC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">Nom</th>
													      <th scope="col">Adresse</th>
													      <th scope="col">Nombre employé</th>
													     
													  
													      
													</tr>
													
		<?php
	$Pdvv=new PdvC();
$list=$Pdvv->recuperer();
		foreach($list as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["nom_pdv"] ; ?></td> 
												      <td> <?php echo $row["adresse_pdv"] ; ?></td> 
												       <td> <?php echo $row["nb_employee"] ; ?></td> 
												      


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>