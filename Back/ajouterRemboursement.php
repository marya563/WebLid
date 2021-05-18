<?PHP
include_once "../Model/remboursement.php";
include_once "../Controller/remboursementC.php";
if(isset($_POST['ajouter']))
	 {
        if (isset($_POST['id']) and isset($_POST['idRec']) and isset($_POST['avis']) and isset($_POST['duree']) )
         {
        $remboursementTmp=new remboursement($_POST['id'],$_POST['idRec'],$_POST['avis'],$_POST['duree']);

        $remboursementTmpC=new RemboursementC();
        $remboursementTmpC->ajouterRemboursement($remboursementTmp);
        header('Location: affichagerRemboursement.php');
            
        }else{
            echo "vérifier les champs";
        }
     }
?>