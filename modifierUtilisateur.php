<?PHP
include_once "../../entities/Utilisateur.php";
include_once "../../core/UtilisateurC.php";
if ($_POST['modifier']){
    $utilisateur= new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['sexe'],$_POST['tel']);
    $utilisateurC= new UtilisateurC();
    $utilisateurC->modifierUtilisateur($utilisateur,$_POST['id_ini']);
    header('Location: affichageUtilisateur.php');
}	
?>