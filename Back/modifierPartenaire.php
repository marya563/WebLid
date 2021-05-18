<?PHP
include_once "../Model/partenaire.php";
include_once "../Controller/partenaireC.php";
if ($_POST['modifier']){
    $partenaire= new Partenaire($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['pdp'],$_POST['tel']);
    $partenaireC= new PartenaireC();
    $partenaireC->modifierPartenaire($partenaire,$_POST['id_ini']);
    header('Location: affichagePartenaire.php');
}	
?>