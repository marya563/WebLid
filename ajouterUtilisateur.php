<?PHP
include_once "../../entites/utilisateur.php";
include_once "../../core/UtilisateurC.php";
if(isset($_POST['ajouter']))
	 {
        if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['sexe']) and isset($_POST['tel']))
         {
        $utilisateurTmp=new utilisateur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['sexe'],$_POST['tel']);

        $utilisateurTmpC=new UtilisateurC();
        $utilisateurTmpC->ajouterUtilisateur($utilisateurTmp);
        header('Location: affichageUtilisateur.php');
            
        }else{
            echo "vérifier les champs";
        }
     }
?>