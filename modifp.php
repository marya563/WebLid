<?PHP
    include "../controller/PdvC.php";
$dbcon= config::getConnexion();

$id_pdv = $_GET['id_pdv'] ;
$adresse_pdv = $_POST['adresse_pdv'] ;
$nom_pdv = $_POST['nom_pdv'] ;
$nb_employee = $_POST['nb_employee'] ;



//$image="image_evenement/".$image ;
try {
	$stmt = $dbcon->prepare("UPDATE pdv SET id_pdv=:id_pdv,adresse_pdv=:adresse_pdv,
											  nom_pdv=:nom_pdv,
											  nb_employee=:nb_employee,
											 					  
											  WHERE 
											  id_pdv=:id_pdv") ;
	$stmt->bindValue(":id_pdv", $id_pdv) ;
	$stmt->bindValue(":adresse_pdv",$adresse_pdv) ;
	$stmt->bindValue(":nom_pdv",$nom_pdv) ;
	$stmt->bindValue(":nb_employee",$nb_employee) ;
	
	

	$stmt->execute() ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert(" modif avec succés");
location="index.php";
</script>
</script>
<body>
</body>
</html>
 
 <?php
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
  ?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Une erreur c'est produite lors de la modification de ce produit veuiller verifier les champs saisie !");
location="index.php";
</script>
</script>
<body>
</body>
</html>
<?php
}

 ?>	