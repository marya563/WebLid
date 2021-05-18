<?PHP

include_once "../Controller/partenaireC.php";
$partenaireC=new PartenaireC();
if (isset($_POST["id"])){
	$partenaireC->supprimerPartenaire($_POST["id"]);
	header('Location: affichagePartenaire.php');
}

?>