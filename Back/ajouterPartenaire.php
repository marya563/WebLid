<?PHP
include_once "../Model/partenaire.php";
include_once "../Controller/partenaireC.php";
if(isset($_POST['ajouter']))
	 {
        if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse']) and isset($_POST['pdp']) and isset($_POST['tel']))
         {
        $partenaireTmp=new partenaire($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['pdp'],$_POST['tel']);

        $partenaireTmpC=new PartenaireC();
        $partenaireTmpC->ajouterPartenaire($partenaireTmp);
        header('Location: affichagePartenaire.php');
            
        }else{
            echo "vérifier les champs";
        }
     }
?>